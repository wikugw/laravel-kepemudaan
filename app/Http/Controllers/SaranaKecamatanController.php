<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sarana_Prasarana;
use App\Kecamatan;
use App\Kelurahan;

class SaranaKecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_kecamatan)
    {
        $data_sarana_prasarana = Sarana_Prasarana::whereHas('kelurahan', function($q) use($id_kecamatan){
            $q->where('id_kecamatan', $id_kecamatan);
        })->get();
        $kecamatan = Kecamatan::find($id_kecamatan);
        return view('admin/v_pengelolaan_sarana_kecamatan')->with(['data_sarana_prasarana' => $data_sarana_prasarana, 'kecamatan' => $kecamatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_kecamatan)
    {
        $data_kelurahan = Kelurahan::where('id_kecamatan',$id_kecamatan)->get();
        $kecamatan = Kecamatan::find($id_kecamatan);
        return view('admin/v_tambah_data_sarana_kecamatan')->with(['data_kelurahan' => $data_kelurahan, 'kecamatan' => $kecamatan]);
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
          return redirect()->route('kecamatan_sarana',$id_kecamatan);
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
    public function edit($id_kecamatan, $id_sarana)
    {
        $sarana_prasarana = Sarana_Prasarana::find($id_kecamatan);
        $data_kelurahan = Kelurahan::where('id_kecamatan',$id_kecamatan)->get();
        $kecamatan = Kecamatan::find($id_kecamatan);
        return view('admin/v_sunting_data_sarana_kecamatan')->with([
            'sarana_prasarana' => $sarana_prasarana,
            'data_kelurahan' => $data_kelurahan, 
            'kecamatan' => $kecamatan
        ]);
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
        $find = Sarana_Prasarana::find($id_sarana);
        $sarana_prasarana = $find->update(
            ['nama_sarana_prasana'=>$request->nama_sarana_prasana,
            'kategori'=>$request->kategori,
            'id_kelurahan'=>$request->id_kelurahan]
          );
          Session::flash('Success', 'Berhasil menyunting data sarana prasarana');
          return redirect()->route('kecamatan_sarana',$id_kecamatan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kecamatan, $id_sarana)
    {
        $find = Sarana_Prasarana::find($id_sarana);
        $find->delete();
        Session::flash('Success', 'Berhasil menghapus data sarana prasarana');
        return redirect()->route('kecamatan_sarana',$id_kecamatan);
    }
}
