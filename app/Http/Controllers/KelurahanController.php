<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelurahan;
use App\Kecamatan;
use App\Organisasi_Kepemudaan;
use Session;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kelurahan = Kelurahan::with('organisasi_kepemudaan')->with('kecamatan')->get();
        // return $data_kelurahan;
        // return $data_kelurahan;
        return view('admin/v_pengelolaan_kelurahan')->with(['data_kelurahan' => $data_kelurahan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kecamatan = Kecamatan::all();
        $data_organisasi_kepemudaan = Organisasi_Kepemudaan::where('id_subkategori', '5')->get();
        return view('admin/v_tambah_data_kelurahan')->with(['data_kecamatan' => $data_kecamatan,
                                                            'data_organisasi_kepemudaan' =>$data_organisasi_kepemudaan]);
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
            'nama_kelurahan' => 'required|string|max:255',
            'id_kecamatan' => 'required|exists:kecamatan,id',
            'id_kelompok_potensi_pemuda' => 'required|exists:kelompok_potensi_pemuda,id',
        ]);
        $data_kelurahan = Kelurahan::create(
            ['nama_kelurahan' => $request->nama_kelurahan,
            'id_kelompok_potensi_pemuda' => $request->id_kelompok_potensi_pemuda,
            'id_kecamatan' => $request->id_kecamatan]
          );
          Session::flash('Success', 'Berhasil menambah data kelurahan');
          return redirect()->route('kelurahan');
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
    public function edit($id)
    {
        $kelurahan = Kelurahan::with('kecamatan')->with('organisasi_kepemudaan')->find($id);
        $data_kecamatan = Kecamatan::all();
        $data_organisasi_kepemudaan = Organisasi_Kepemudaan::where('id_subkategori', '5')->get();
        return view('admin/v_sunting_data_kelurahan')->with(['kelurahan' => $kelurahan, 'data_kecamatan' => $data_kecamatan,
        'data_organisasi_kepemudaan' => $data_organisasi_kepemudaan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
          'nama_kelurahan' => 'required|string|max:255',
          'id_kecamatan' => 'required|exists:kecamatan,id',
          'id_kelompok_potensi_pemuda' => 'required|exists:kelompok_potensi_pemuda,id',
        ]);
        $find = Kelurahan::find($id);
        $kelurahan = $find->update(
          ['nama_kelurahan'=>$request->nama_kelurahan,
          'id_kelompok_potensi_pemuda'=>$request->id_kelompok_potensi_pemuda,
          'id_kecamatan'=>$request->id_kecamatan]
        );
        Session::flash('Success', 'Berhasil menyunting data kelurahan');
        return redirect()->route('kelurahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = Kelurahan::find($id);
        $find->delete();
        Session::flash('Success', 'Berhasil menghapus data kelurahan');
        return redirect()->route('kelurahan');
    }
}
