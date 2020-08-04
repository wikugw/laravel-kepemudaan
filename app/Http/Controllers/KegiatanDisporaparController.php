<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatan_Disporapar;
use Session;

class KegiatanDisporaparController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kegiatan_disporapar = Kegiatan_Disporapar::all();
      return view('admin/v_pengelolaan_kegiatan_disporapar')->with(['data_kegiatan_disporapar' => $data_kegiatan_disporapar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/v_tambah_data_kegiatan_disporapar');
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
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'isi' => 'required',
            'gambar' => 'required|image|max:5000',
        ]);
        $data_kegiatan_disporapar = Kegiatan_Disporapar::create(
            ['judul'=>$request->judul,
            'kategori'=>$request->kategori,
            'isi'=>$request->isi,
            'gambar'=>$request->gambar]
          );
          if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('admin/upload/',$request->file('gambar')->getClientOriginalName());
            $data_kegiatan_disporapar->gambar = $request->file('gambar')->getClientOriginalName();
            $data_kegiatan_disporapar->save();
          }
          Session::flash('Success', 'Berhasil menambah data kegiatan disporaprar');
          return redirect()->route('kegiatan_disporapar');
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
        $kegiatan_disporapar = Kegiatan_Disporapar::find($id);
      return view('admin/v_sunting_data_kegiatan_disporapar')->with(['kegiatan_disporapar' => $kegiatan_disporapar]);
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
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'isi' => 'required',
            'gambar' => 'image|max:5000',
        ]);
        $find = Kegiatan_Disporapar::find($id);
        $kegiatan_disporapar = $find->update([
            'judul'=>$request->judul,
            'kategori'=>$request->kategori,
            'isi'=>$request->isi,
            'gambar'=>$request->gambar
          ]);
        if ($request->hasFile('gambar')) {
          $request->file('gambar')->move('admin/upload/',$request->file('gambar')->getClientOriginalName());
          $find->gambar = $request->file('gambar')->getClientOriginalName();
          $find->save();
        }
        Session::flash('Success', 'Berhasil menyunting data kegiatan disporaprar');
        return redirect()->route('kegiatan_disporapar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find = Kegiatan_Disporapar::find($id);
      $find->delete();
      Session::flash('Success', 'Berhasil menghapus data kegiatan disporaprar');
      return redirect()->route('kegiatan_disporapar');
    }
}
