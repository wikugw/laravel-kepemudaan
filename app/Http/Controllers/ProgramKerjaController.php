<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program_Kerja;
use App\Kelurahan;

class ProgramKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_program_kerja = Program_Kerja::with('kelurahan')->get();
        return view('admin/v_pengelolaan_program_kerja')->with(['data_program_kerja' => $data_program_kerja]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kelurahan = Kelurahan::all();
        return view('admin/v_tambah_data_program_kerja')->with(['data_kelurahan' => $data_kelurahan]);
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
            'nama_program_kerja' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'id_kelurahan' => 'required|exists:kelurahan,id',
        ]);
        $data_sarana_prasarana = Program_Kerja::create(
            ['nama_program_kerja'=>$request->nama_program_kerja,
            'kategori'=>$request->kategori,
            'id_kelurahan'=>$request->id_kelurahan]
          );
          Session::flash('Success', 'Berhasil menambah data program kerja');
        return redirect()->route('program_kerja');
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
        $program_kerja = Program_Kerja::with('kelurahan')->find($id);
      $data_kelurahan = Kelurahan::all();
      return view('admin/v_sunting_data_program_kerja')->with(['program_kerja' => $program_kerja, 'data_kelurahan' => $data_kelurahan]);
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
            'nama_program_kerja' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'id_kelurahan' => 'required|exists:kelurahan,id',
        ]);
        $find = program_kerja::find($id);
        $program_kerja = $find->update(
            ['nama_program_kerja'=>$request->nama_program_kerja,
            'kategori'=>$request->kategori,
            'id_kelurahan'=>$request->id_kelurahan]
        );
        Session::flash('Success', 'Berhasil menyunting data program kerja');
        return redirect()->route('program_kerja');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = Program_Kerja::find($id);
        $find->delete();
        Session::flash('Success', 'Berhasil menghapus data program kerja');
        return redirect()->route('program_kerja');
    }
}
