<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;
use Session;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kecamatan = Kecamatan::all();
      return view('admin/v_pengelolaan_kecamatan')->with(['data_kecamatan' => $data_kecamatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/v_tambah_data_kecamatan');
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
            'nama_kecamatan' => 'required|string|max:255',
        ]);
        $data_kecamatan = Kecamatan::create(
            ['nama_kecamatan' => $request->nama_kecamatan]
        );
        Session::flash('Success', 'Berhasil menambah data kecamatan');
        return redirect()->route('kecamatan');
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
        $kecamatan = Kecamatan::find($id);
        return view('admin/v_sunting_data_kecamatan')->with(['kecamatan' => $kecamatan]);
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
            'nama_kecamatan' => 'required|string|max:255',
        ]);
        $find = Kecamatan::find($id);
        $kecamatan = $find->update(
            ['nama_kecamatan'=>$request->nama_kecamatan]
        );
        Session::flash('Success', 'Berhasil menyunting data kecamatan');
        return redirect()->route('kecamatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = Kecamatan::find($id);
        $find->delete();
        Session::flash('Success', 'Berhasil menghapus data kecamatan');
        return redirect()->route('kecamatan');
    }
}
