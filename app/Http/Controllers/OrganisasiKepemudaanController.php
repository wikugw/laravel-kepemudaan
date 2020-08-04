<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisasi_Kepemudaan;
use App\Subkategori;
use App\Fokus_kerja;
use App\Kegiatan_Kepeloporan;
use App\Kepeloporan_Organisasi;
use App\Kegiatan;
use App\Fokus_Kerja_Organisasi;
use App\Kegiatan_Organisasi;
use Illuminate\Support\Facades\DB;
use Session;

class OrganisasiKepemudaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_organisasi_kepemudaan = Organisasi_Kepemudaan::with('subkategori')->get();
      return view('admin/v_pengelolaan_organisasi_kepemudaan')->with(['data_organisasi_kepemudaan' => $data_organisasi_kepemudaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_subkategori = Subkategori::all();
        $data_fokus_kerja = Fokus_kerja::all();
        $data_kegiatan_kepeloporan = Kegiatan_Kepeloporan::all();
        $data_kegiatan = Kegiatan::all();
        return view('admin/v_tambah_data_organisasi_kepemudaan')->with(['data_subkategori' => $data_subkategori,
                                                                        'data_fokus_kerja' => $data_fokus_kerja,
                                                                        'data_kegiatan_kepeloporan' => $data_kegiatan_kepeloporan,
                                                                        'data_kegiatan' => $data_kegiatan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
          'nama_organisasi' => 'required|string|max:255',
          'email_organisasi' => 'required|string|max:255',
          'no_telp_organisasi' => 'required|string|max:15',
          'subKategori' => 'required|exists:subkategori,id',
          'struktur_pengurus' => 'required|in:struktural,non_struktural',
          'kepemilikan_sekretariat' => 'required|in:ada,tidak_ada',
          'alamat' => 'required|string|max:255',
          'unit_usaha' => 'required|in:ada,tidak_ada',
          'kepemilikan_npwp' => 'required|in:ada,tidak_ada',
          'kepemilikan_adart' => 'required|in:ada,tidak_ada',
          'lingkup' => 'required|in:nasional,lokal,kelurahan,rw,umum,perdukuhan',
          'badan_hukum' => 'required|in:ada,tidak_ada',
          'suket_domisili' => 'required|in:belum_memiliki,sudah_memiliki',
          'jumlah_anggota' => 'required|integer',
          'kepengurusan' => 'required|in:ada,tidak_ada',
          'keanggotaan' => 'required|in:anggota/kader,non_keanggotaan',
          'visi' => 'required|string|max:255',
          'misi' => 'required|string|max:255',
          'nama_ketua' => 'required|string|max:255',
          'tanggal_berdiri' => 'required|date',
      ]);


      $data_fokus_kerja =  $request->data_fokus_kerja;
      $data_kegiatan =  $request->data_kegiatan;
      $data_kegiatan_Kepeloporan =  $request->data_kegiatan_Kepeloporan;

          $path_foto = null;
          if($request->has('foto') && $request->foto != "undefined"){
              $foto = $request->file('foto');
              $extension = $foto->getClientOriginalExtension();
              $filename = 'logo-'.time().'.'.$extension;
              $foto->storeAs('public/logo_organisasi',$filename);
              $path_foto = 'storage/logo_organisasi'.'/'.$filename;
          }

          $id_organisasi = Organisasi_Kepemudaan::insertGetId($request, $path_foto);

          foreach((array) $data_fokus_kerja as $fokus_kerja){
            fokus_kerja_organisasi::create([
              'id_kelompok_potensi_pemuda'  => $id_organisasi,
              'id_fokus_kerja'  => $fokus_kerja
            ]);
          }

          foreach((array) $data_kegiatan_Kepeloporan as $kegiatan_kepeloporan){
            kepeloporan_organisasi::create([
              'id_kelompok_potensi_pemuda'  => $id_organisasi,
              'id_kegiatan_kepeloporan'  => $kegiatan_kepeloporan
            ]);
          }

          foreach((array) $data_kegiatan as $kegiatan){
            kegiatan_organisasi::create([
              'id_kelompok_potensi_pemuda'  => $id_organisasi,
              'id_kegiatan'  => $kegiatan
            ]);
          }
          Session::flash('Success', 'Berhasil menambah data organisasi kepemudaan');
          return redirect()->route('organisasi_kepemudaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id_organisasi)
    // {
    //   $data_organisasi = Organisasi_Kepemudaan::with('fokus_kerja_organisasi','kegiatan_kepeloporan','kegiatan')
    //         ->where('id',$id_organisasi)->first();
    //   return view('admin/v_detail_organisasi_kepemudaan')->with(['data_organisasi'=>$data_organisasi]);
    // }

    public function show($id_organisasi)
    {
      $data_organisasi = Organisasi_Kepemudaan::with('fokus_kerja_organisasi','kepeloporan_organisasi','kegiatan_organisasi')
            ->where('id',$id_organisasi)->first();
      return view('admin/v_detail_organisasi_kepemudaan')->with(['data_organisasi'=>$data_organisasi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_organisasi)
    {
        $data_subkategori = subkategori::all();
      $data_fokus_kerja = fokus_kerja::all();
      $data_kegiatan_kepeloporan = kegiatan_kepeloporan::all();
      $data_kegiatan = kegiatan::all();
      $organisasi = organisasi_kepemudaan::with('fokus_kerja',
                                                'kepeloporan_organisasi',
                                                'kegiatan_organisasi')
                                  ->where('id', $id_organisasi)->first();
      $listFokusKerja = [];
      foreach($organisasi->fokus_kerja as $data){
        array_push($listFokusKerja, $data->id_fokus_kerja);
      }

      $listKepeloporan = [];
      foreach($organisasi->kepeloporan_organisasi as $data){
        array_push($listKepeloporan, $data->id_kegiatan_kepeloporan);
      }

      $listKegiatan = [];
      foreach($organisasi->kegiatan_organisasi as $data){
        array_push($listKegiatan, $data->id_kegiatan);
      }

      return view('admin/v_sunting_data_organisasi_kepemudaan')->with(['listKegiatan' => $listKegiatan,
                                                                        'listKepeloporan' => $listKepeloporan,
                                                                        'listFokusKerja' => $listFokusKerja,
                                                                        'organisasi' => $organisasi,
                                                                        'data_subkategori' => $data_subkategori,
                                                                        'data_fokus_kerja' => $data_fokus_kerja,
                                                                        'data_kegiatan_kepeloporan' => $data_kegiatan_kepeloporan,
                                                                        'data_kegiatan' => $data_kegiatan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_organisasi)
    {
      $validatedData = $request->validate([
        'nama_organisasi' => 'required|string|max:255',
        'email_organisasi' => 'required|string|max:255',
        'no_telp_organisasi' => 'required|string|max:15',
        'subkategori' => 'required|exists:subkategori,id',
        'struktur_pengurus' => 'required|in:struktural,non_struktural',
        'kepemilikan_sekretariat' => 'required|in:ada,tidak_ada',
        'alamat' => 'required|string|max:255',
        'unit_usaha' => 'required|in:ada,tidak_ada',
        'kepemilikan_npwp' => 'required|in:ada,tidak_ada',
        'kepemilikan_adart' => 'required|in:ada,tidak_ada',
        'lingkup' => 'required|in:nasional,lokal,kelurahan,rw,umum,perdukuhan',
        'badan_hukum' => 'required|in:ada,tidak_ada',
        'suket_domisili' => 'required|in:belum_memiliki,sudah_memiliki',
        'jumlah_anggota' => 'required|integer',
        'kepengurusan' => 'required|in:ada,tidak_ada',
        'keanggotaan' => 'required|in:anggota/kader,non_keanggotaan',
        'visi' => 'required|string|max:255',
        'misi' => 'required|string|max:255',
        'nama_ketua' => 'required|string|max:255',
        'tanggal_berdiri' => 'required|date',
    ]);

      $data_fokus_kerja =  $request->data_fokus_kerja;
      $data_kegiatan =  $request->data_kegiatan;
      $data_kegiatan_Kepeloporan =  $request->data_kegiatan_Kepeloporan;

          $path_foto = null;
          if($request->has('foto') && $request->foto != "undefined"){
              $foto = $request->file('foto');
              $extension = $foto->getClientOriginalExtension();
              $filename = 'logo-'.time().'.'.$extension;
              $foto->storeAs('public/logo_organisasi', $filename);
              $path_foto = 'storage/logo_organisasi'.'/'.$filename;
          }

          Organisasi_Kepemudaan::updateOrganisasi($request, $id_organisasi, $path_foto);

          $listFokusKerja = [];
          foreach((array) $data_fokus_kerja as $fokus_kerja){
            $listFokusKerja[] = $fokus_kerja;
            fokus_kerja_organisasi::firstOrCreate([
              'id_kelompok_potensi_pemuda' => $id_organisasi,
              'id_fokus_kerja' => $fokus_kerja
            ]);
          }
          fokus_kerja_organisasi::where('id_kelompok_potensi_pemuda', $id_organisasi)
                                  ->whereNotIn('id_fokus_kerja', $listFokusKerja)
                                  ->delete();


          $listKepeloporan = [];
          foreach((array) $data_kegiatan_Kepeloporan as $kegiatan_kepeloporan){
            $listKepeloporan[] = $kegiatan_kepeloporan;
            kepeloporan_organisasi::firstOrCreate([
              'id_kelompok_potensi_pemuda'  => $id_organisasi,
              'id_kegiatan_kepeloporan'  => $kegiatan_kepeloporan
            ]);
          }
          kepeloporan_organisasi::where('id_kelompok_potensi_pemuda', $id_organisasi)
                                  ->whereNotIn('id_kegiatan_kepeloporan', $listKepeloporan)
                                  ->delete();


          $listKegiatan = [];
          foreach((array) $data_kegiatan as $kegiatan){
            $listKegiatan[] = $kegiatan;
            kegiatan_organisasi::firstOrCreate([
              'id_kelompok_potensi_pemuda'  => $id_organisasi,
              'id_kegiatan'  => $kegiatan
            ]);
          }
          kegiatan_organisasi::where('id_kelompok_potensi_pemuda', $id_organisasi)
                                ->whereNotIn('id_kegiatan', $listKegiatan)
                                ->delete();
          Session::flash('Success', 'Berhasil menyunting data organisasi kepemudaan');
          return redirect()->route('organisasi_kepemudaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_organisasi)
    {
        organisasi_kepemudaan::where('id',$id_organisasi)->delete();
        fokus_kerja_organisasi::where('id_kelompok_potensi_pemuda',$id_organisasi)->delete();
        kegiatan_organisasi::where('id_kelompok_potensi_pemuda',$id_organisasi)->delete();
        kepeloporan_organisasi::where('id_kelompok_potensi_pemuda',$id_organisasi)->delete();
        Session::flash('Success', 'Berhasil menghapus data organisasi kepemudaan');
        return redirect()->route('organisasi_kepemudaan');
    }
}
