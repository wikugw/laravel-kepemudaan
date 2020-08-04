<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sarana_Prasarana;
use App\Kelurahan;

class SaranaPrasaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_sarana_prasarana = Sarana_Prasarana::all();
        return view('admin/v_pengelolaan_sarana_prasarana')->with(['data_sarana_prasarana' => $data_sarana_prasarana]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kelurahan = Kelurahan::all();
        return view('admin/v_tambah_data_sarana_prasarana')->with(['data_kelurahan' => $data_kelurahan]);
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
          return redirect()->route('sarana_prasarana');
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
        $sarana_prasarana = Sarana_Prasarana::with('kelurahan')->find($id);
        $data_kelurahan = Kelurahan::all();
        return view('admin/v_sunting_data_sarana_prasarana')->with(['sarana_prasarana' => $sarana_prasarana, 'data_kelurahan' => $data_kelurahan]);
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
            'nama_sarana_prasana' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'id_kelurahan' => 'required|exists:kelurahan,id',
        ]);
        $find = Sarana_Prasarana::find($id);
        $sarana_prasarana = $find->update(
            ['nama_sarana_prasana'=>$request->nama_sarana_prasana,
            'kategori'=>$request->kategori,
            'id_kelurahan'=>$request->id_kelurahan]
        );
        Session::flash('Success', 'Berhasil menambah data sarana prasarana');
        return redirect()->route('sarana_prasarana');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = Sarana_Prasarana::find($id);
        $find->delete();
        Session::flash('Success', 'Berhasil menambah data sarana prasarana');
        return redirect()->route('sarana_prasarana');
    }
}
