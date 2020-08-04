<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program_Kerja;
use App\Kelurahan;

class ProgramKelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_kelurahan)
    {
        $data_program_kerja = program_kerja::with('kelurahan')->where('id_kelurahan', $id_kelurahan)->get();
        $kelurahan = kelurahan::find($id_kelurahan);
        return view('admin/v_pengelolaan_program_kelurahan')->with(['data_program_kerja' => $data_program_kerja, 'kelurahan' => $kelurahan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_kelurahan)
    {
        $kelurahan = kelurahan::find($id_kelurahan);
        return view('admin/v_tambah_data_program_kelurahan')->with(['kelurahan' => $kelurahan]);
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
            'nama_program_kerja' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'id_kelurahan' => 'required|exists:kelurahan,id',
        ]);
        $data_program_kerja = program_kerja::create(
            ['nama_program_kerja'=>$request->nama_program_kerja,
            'kategori'=>$request->kategori,
            'id_kelurahan'=>$request->id_kelurahan]
          );
          Session::flash('Success', 'Berhasil menambah data program kerja');
          return redirect()->route('kelurahan_program', $id_kelurahan);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kelurahan)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kelurahan, $id_program)
    {
        $program_kerja = program_kerja::with('kelurahan')->find($id_program);
      $kelurahan = kelurahan::find($id_kelurahan);
      return view('admin/v_sunting_data_program_kelurahan')->with(['program_kerja' => $program_kerja, 'kelurahan' => $kelurahan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kelurahan, $id_program)
    {
        $validatedData = $request->validate([
            'nama_program_kerja' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'id_kelurahan' => 'required|exists:kelurahan,id',
        ]);
        $find = program_kerja::find($id_program);
        $program_kerja = $find->update(
          ['nama_program_kerja'=>$request->nama_program_kerja,
          'kategori'=>$request->kategori,
          'id_kelurahan'=>$request->id_kelurahan]
        );
        Session::flash('Success', 'Berhasil menyunting data program kerja');
        return redirect()->route('kelurahan_program', $id_kelurahan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kelurahan, $id_program)
    {
        $find = program_kerja::find($id_program);
      $find->delete();
      Session::flash('Success', 'Berhasil menghapus data program kerja');
      return redirect()->route('kelurahan_program', $id_kelurahan);
    }
}
