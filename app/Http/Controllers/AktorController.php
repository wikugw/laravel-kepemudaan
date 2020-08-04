<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Organisasi_Kepemudaan;
use Session;


class AktorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_aktor = User::with('organisasi_kepemudaan')->get();
        return view('admin/v_pengelolaan_aktor')->with(['data_aktor' => $data_aktor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_organisasi_kepemudaan = organisasi_kepemudaan::all();
        return view('admin/v_tambah_data_aktor')->with(['data_organisasi_kepemudaan' => $data_organisasi_kepemudaan]);
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
            'username' => 'required|string|unique:Users|max:255',
            'password' => 'required|string|max:255',
            'nama_aktor' => 'required|string|max:255',
            'status' => 'required|string|exists:roles,name',
            'id_kelompok_potensi_pemuda' => 'nullable|exists:kelompok_potensi_pemuda,id',
        ]);
        $aktor = User::create(
            [
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama_aktor' => $request->nama_aktor,
            'status' => $request->status,
            'id_kelompok_potensi_pemuda' => $request->id_kelompok_potensi_pemuda]
          );
        Session::flash('Success', 'Berhasil menambah data aktor');
        return redirect()->route('aktor');
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
        $aktor = User::with('organisasi_kepemudaan')->find($id);
        $data_organisasi_kepemudaan = organisasi_kepemudaan::all();
        return view('admin/v_sunting_data_aktor')->with(['data_organisasi_kepemudaan' => $data_organisasi_kepemudaan, 'aktor' => $aktor]);
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
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'nama_aktor' => 'required|string|max:255',
            'status' => 'required|string|exists:roles,name',
            'id_kelompok_potensi_pemuda' => 'nullable|exists:kelompok_potensi_pemuda,id',
        ]);
        $find = User::find($id);
        $aktor = $find->update(
        [
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama_aktor' => $request->nama_aktor,
            'status' => $request->status,
            'id_kelompok_potensi_pemuda' => $request->id_kelompok_potensi_pemuda]
        );
        Session::flash('Success', 'Berhasil menyunting data aktor');
        return redirect()->route('aktor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = User::find($id);
        $find->delete();
        Session::flash('Success', 'Berhasil menghapus data aktor');
        return redirect()->route('aktor');
    }
}
