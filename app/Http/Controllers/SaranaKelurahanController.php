<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sarana_Prasarana;
use App\Kelurahan;

class SaranaKelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_kelurahan)
    {
        $data_sarana_prasarana = Sarana_Prasarana::with('kelurahan')->where('id_kelurahan', $id_kelurahan)->get();
      $kelurahan = Kelurahan::find($id_kelurahan);
      return view('admin/v_pengelolaan_sarana_kelurahan')->with(['data_sarana_prasarana' => $data_sarana_prasarana, 'kelurahan' => $kelurahan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_kelurahan)
    {
        $kelurahan = Kelurahan::find($id_kelurahan);
      return view('admin/v_tambah_data_sarana_kelurahan')->with(['kelurahan' => $kelurahan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_kelurahan)
    {
        $validatedData = $request->validate([
            'nama_sarana_prasana' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'id_kelurahan' => 'required|exists:kelurahan,id',
        ]);
        $data_sarana_prasarana = Sarana_Prasarana::create(
            ['nama_sarana_prasana'=>$request->nama_sarana_prasana,
            'kategori'=>$request->kategori,
            'id_kelurahan'=>$request->id_kelurahan]
          );
          Session::flash('Success', 'Berhasil menambah data sarana prasarana');
          return redirect()->route('kelurahan_sarana', $id_kelurahan);
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
    public function edit($id_kelurahan, $id_sarana)
    {
        $sarana_prasarana = Sarana_Prasarana::with('kelurahan')->find($id_sarana);
      $kelurahan = Kelurahan::find($id_kelurahan);
      return view('admin/v_sunting_data_sarana_kelurahan')->with(['sarana_prasarana' => $sarana_prasarana, 'kelurahan' => $kelurahan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kelurahan, $id_sarana)
    {
        $validatedData = $request->validate([
            'nama_sarana_prasana' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'id_kelurahan' => 'required|exists:kelurahan,id',
        ]);
        $find = Sarana_Prasarana::find($id_sarana);
      $sarana_prasarana = $find->update(
        ['nama_sarana_prasana'=>$request->nama_sarana_prasana,
        'kategori'=>$request->kategori,
        'id_kelurahan'=>$request->id_kelurahan]
      );
      Session::flash('Success', 'Berhasil menyunting data sarana prasarana');
      return redirect()->route('kelurahan_sarana', $id_kelurahan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kelurahan, $id_sarana)
    {
        $find = Sarana_Prasarana::find($id_sarana);
      $find->delete();
      Session::flash('Success', 'Berhasil menghapus data sarana prasarana');
      return redirect()->route('kelurahan_sarana', $id_kelurahan);
    }
}
