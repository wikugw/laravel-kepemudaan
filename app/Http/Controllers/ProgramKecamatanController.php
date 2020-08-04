<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program_Kerja;
use App\Kecamatan;

class ProgramKecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_kecamatan)
    {
        $data_program_kerja = Program_Kerja::where('id_kecamatan',$id_kecamatan)->get();
        $kecamatan = Kecamatan::find($id_kecamatan);
        return view('admin/v_pengelolaan_program_kecamatan')->with(['data_program_kerja' => $data_program_kerja, 'kecamatan' => $kecamatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_kecamatan)
    {
        $kecamatan = Kecamatan::find($id_kecamatan);
        return view('admin/v_tambah_data_program_kecamatan')->with(['kecamatan' => $kecamatan]);
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
            'nama_program_kerja' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'id_kecamatan' => 'required|exists:kelurahan,id',
        ]);
        $data_program_kerja = Program_Kerja::create(
            ['nama_program_kerja'=>$request->nama_program_kerja,
            'kategori'=>$request->kategori,
            'id_kecamatan'=>$request->id_kecamatan]
          );
          Session::flash('Success', 'Berhasil menambah data program kerja');
          return redirect()->route('kecamatan_program',$id_kecamatan);
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
    public function edit($id_kecamatan, $id_program)
    {
        $program_kerja = Program_Kerja::find($id_program);
      $kecamatan = Kecamatan::find($id_kecamatan);
      return view('admin/v_sunting_data_program_kecamatan')->with(['program_kerja' => $program_kerja, 'kecamatan' => $kecamatan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kecamatan, $id_program)
    {
        $validatedData = $request->validate([
            'nama_program_kerja' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'id_kecamatan' => 'required|exists:kelurahan,id',
        ]);
        
        $find = Program_Kerja::find($id_program);
        $program_kerja = $find->update(
          ['nama_program_kerja'=>$request->nama_program_kerja,
          'kategori'=>$request->kategori,
          'id_kecamatan'=>$request->id_kecamatan]
        );
        Session::flash('Success', 'Berhasil menyunting data program kerja');
        return redirect()->route('kecamatan_program',$id_kecamatan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kecamatan, $id_program)
    {
        $find = Program_Kerja::find($id_program);
        $find->delete();
        Session::flash('Success', 'Berhasil menghapus data program kerja');
        return redirect()->route('kecamatan_program',$id_kecamatan);
    }
}
