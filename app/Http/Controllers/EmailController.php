<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Organisasi_Kepemudaan;
use \App\Mail\kirim_email;
use Session;


class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organisasi_kepemudaan = Organisasi_Kepemudaan::find($id);
      return view('admin/v_kirim_email')->with(['organisasi_kepemudaan' => $organisasi_kepemudaan]);
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
            'isi' => 'required|string',
        ]);
        $organisasi_kepemudaan = Organisasi_Kepemudaan::find($id);
        $details = [
            'title' => $request->judul,
            'body' => $request->isi
        ];

        \Mail::to($organisasi_kepemudaan->email_organisasi)->send(new kirim_email($details));
        Session::flash('Success', 'Berhasil mengirim email kepada '.$organisasi_kepemudaan->nama_organisasi);
        return redirect()->route('organisasi_kepemudaan');
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
