<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan_Disporapar;
use App\Kecamatan;
use App\Subkategori;

class LandingBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kegiatan_disporapar = Kegiatan_Disporapar::all();
      $data_kecamatan = Kecamatan::with('kelurahan')->get();
      $data_subkategori = Subkategori::with('organisasi_kepemudaan')->get();
      return view('landing/v_blog')->with(['data_kegiatan_disporapar' => $data_kegiatan_disporapar,
      'data_kecamatan' => $data_kecamatan, 'data_subkategori' => $data_subkategori]);
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
        $kegiatan_disporapar = Kegiatan_Disporapar::find($id);
      $data_kecamatan = Kecamatan::with('kelurahan')->get();
      $data_subkategori = Subkategori::with('organisasi_kepemudaan')->get();
      return view('landing/v_blog_detail')->with(['kegiatan_disporapar' => $kegiatan_disporapar,
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
