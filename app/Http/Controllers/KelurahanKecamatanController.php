<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelurahan;
use App\Kecamatan;
use App\Organisasi_Kepemudaan;

class KelurahanKecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_kecamatan)
    {
      $data_kelurahan = Kelurahan::where('id_kecamatan',$id_kecamatan)->get();
      $kecamatan = Kecamatan::find($id_kecamatan);
      return view('admin/v_pengelolaan_kelurahan_kecamatan')->with(['data_kelurahan' => $data_kelurahan, 'kecamatan' => $kecamatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_kecamatan)
    {
        $kecamatan = Kecamatan::find($id_kecamatan);
        $organisasi = Organisasi_Kepemudaan::all();
        return view('admin/v_tambah_data_kelurahan_kecamatan')->with(['kecamatan' => $kecamatan, 'data_organisasi_kepemudaan' => $organisasi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_kecamatan)
    {
          $validatedData = $request->validate([
            'nama_kelurahan' => 'required|string|max:255',
            'id_kecamatan' => 'required|exists:kecamatan,id',
            'id_kelompok_potensi_pemuda' => 'required|exists:kelompok_potensi_pemuda,id',
          ]);
          $data_kelurahan = Kelurahan::create([
            'nama_kelurahan' => $request->nama_kelurahan,
            'id_kelompok_potensi_pemuda' => $request->id_kelompok_potensi_pemuda,
            'id_kecamatan' => $request->id_kecamatan
          ]);
          Session::flash('Success', 'Berhasil menambah data kelurahan');
          return redirect()->route('kecamatan_kelurahan',$id_kecamatan);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kecamatan, $id_kelurahan)
    {
        $kelurahan = Kelurahan::find($id_kelurahan);
        $kecamatan = Kecamatan::find($id_kecamatan);
        return view('admin/v_sunting_data_kelurahan_kecamatan')->with(['kelurahan' => $kelurahan, 'kecamatan' => $kecamatan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kecamatan, $id_kelurahan)
    {
        $validatedData = $request->validate([
          'nama_kelurahan' => 'required|string|max:255',
          'id_kecamatan' => 'required|exists:kecamatan,id',
          'id_kelompok_potensi_pemuda' => 'required|exists:kelompok_potensi_pemuda,id',
        ]);
        $find = Kelurahan::find($id_kelurahan);
        $kelurahan = $find->update([
            'nama_kelurahan'=>$request->nama_kelurahan,
            'id_kelompok_potensi_pemuda'=>$request->id_kelompok_potensi_pemuda,
            'id_kecamatan'=>$request->id_kecamatan
        ]);
        Session::flash('Success', 'Berhasil menyunting data kelurahan');
        return redirect()->route('kecamatan_kelurahan',$id_kecamatan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kecamatan, $id_kelurahan)
    {
      $find = Kelurahan::find($id_kelurahan);
      $find->delete();
      Session::flash('Success', 'Berhasil menghapus data kelurahan');
      return redirect()->route('kecamatan_kelurahan',$id_kecamatan);
    }
}
