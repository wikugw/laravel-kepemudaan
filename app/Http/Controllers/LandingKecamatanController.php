<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;
use App\Kelurahan;
use App\Program_Kerja;
use App\Sarana_Prasarana;
use App\Subkategori;

class LandingKecamatanController extends Controller
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
        $kecamatan = Kecamatan::find($id);
      $data_kelurahan = Kelurahan::where('id_kecamatan', $id)->get();
      $data_program_kerja = Program_Kerja::where('id_kecamatan', $id)->get();
      $data_sarana_prasarana = Sarana_Prasarana::whereHas('kelurahan', function($q) use($id){
                                $q->where('id_kecamatan', $id);})->get();
      $data_kecamatan = Kecamatan::with('kelurahan')->get();
      $data_subkategori = Subkategori::with('organisasi_kepemudaan')->get();
      return view('landing/v_lihat_kecamatan')->with(['kecamatan' => $kecamatan, 'data_kelurahan' => $data_kelurahan,
                                                        'data_program_kerja' => $data_program_kerja,
                                                        'data_sarana_prasarana' => $data_sarana_prasarana,
                                                        'data_kecamatan' => $data_kecamatan,
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
