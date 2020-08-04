<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;
use App\Kelurahan;
use App\Program_Kerja;
use App\Sarana_Prasarana;
use App\Subkategori;
use App\Organisasi_Kepemudaan;

class LandingKelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_program_kerja = Program_Kerja::where('id_kelurahan', $id)->get();
        $data_sarana_prasarana = Sarana_Prasarana::where('id_kelurahan', $id)->get();
        $kelurahan = Kelurahan::find($id);
        $data_kecamatan = Kecamatan::with('kelurahan')->get();
        $data_subkategori = Subkategori::with('organisasi_kepemudaan')->get();
        return view('landing/v_lihat_kelurahan')->with(['data_program_kerja' => $data_program_kerja,
                                                        'data_sarana_prasarana' => $data_sarana_prasarana,
                                                        'kelurahan' => $kelurahan, 'data_kecamatan'=>$data_kecamatan,
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
