<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisasi_Kepemudaan;
use App\Kecamatan;
use App\Subkategori;

class LandingOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($subkategori)
    {
        $data_organisasi = Organisasi_Kepemudaan::where('id_subkategori', $subkategori)->get();
        $subKategori = Subkategori::find($subkategori);
        $data_kecamatan = Kecamatan::with('kelurahan')->get();
        $data_subkategori = Subkategori::with('organisasi_kepemudaan')->get();
        return view('landing/v_lihat_organisasi')->with(['data_organisasi' => $data_organisasi, 'subKategori' => $subKategori,'data_kecamatan'=>$data_kecamatan,
                                                        'data_subkategori' => $data_subkategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organisasi_kepemudaan = Organisasi_Kepemudaan::with('fokus_kerja_organisasi','kepeloporan_organisasi','kegiatan_organisasi')
                                            ->where('id',$id)->first();
      $data_kecamatan = Kecamatan::with('kelurahan')->get();
      $data_subkategori = Subkategori::with('organisasi_kepemudaan')->get();
      return view('landing/v_lihat_organisasi_kepemudaan')->with(['organisasi_kepemudaan' => $organisasi_kepemudaan,
                                                                    'data_kecamatan'=>$data_kecamatan,
                                                                    'data_subkategori' => $data_subkategori]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
