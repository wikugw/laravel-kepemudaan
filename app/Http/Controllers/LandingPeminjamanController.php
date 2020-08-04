<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecamatan;
use App\Peminjaman_Sarana;
use App\Subkategori;
use Carbon\carbon;
use Illuminate\Support\Facades\DB;
use Session;

class LandingPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kecamatan = Kecamatan::with('kelurahan')->get();
      $data_peminjaman = Peminjaman_Sarana::where('status_pengajuan','verifikasi')->get();
      $data_subkategori = Subkategori::with('organisasi_kepemudaan')->get();
      return view('landing/v_ajukan_peminjaman_sarana')->with(['data_kecamatan' => $data_kecamatan,
                                                                'data_peminjaman' => $data_peminjaman,
                                                                'data_subkategori' => $data_subkategori]);
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
        $validatedData = $request->validate([
            'nama_pengaju' => 'required|string|max:255',
            'status_pengaju' => 'required|string|max:255',
            'no_telp_pengaju' => 'required|string|max:15',
            'tanggal_peminjaman' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'jam_peminjaman' => 'date_format:H:i',
            'jam_kembali' => 'date_format:H:i',
          ]);
    
    
          $carbon = Carbon::now();
          $carbon->timezone = 'Asia/Jakarta';
          $tanggalSekarang = $carbon->toDateString();
    
              $nama_pengaju = $request->nama_pengaju;
              $status_pengaju = $request->status_pengaju;
              $no_telp_pengaju = $request->no_telp_pengaju;
              $tanggal_peminjaman = $request->tanggal_peminjaman;
              $tanggal_kembali = $request->tanggal_kembali;
              $jam_peminjaman = $request->jam_peminjaman;
              $jam_kembali = $request->jam_kembali;
              $status_peminjaman = 'dipesan';
              $status_pengajuan = 'menunggu';
              $created_at = $tanggalSekarang;
              $tanggal_peminjaman .= " ".$jam_peminjaman;
              $tanggal_kembali .= " ".$jam_kembali;
    
              if($tanggal_kembali < $tanggal_peminjaman){
                Session::flash('Error', 'Tanggal kembali sebelum tanggal pinjam');
              } elseif ($tanggal_peminjaman < $tanggalSekarang){
                Session::flash('Error', 'Tanggal sudah lewat');
              } else {
                $isExist = peminjaman_sarana::where(function($querys) use($tanggal_peminjaman, $tanggal_kembali){
                            $querys->where(function($query) use($tanggal_peminjaman, $tanggal_kembali){
                              $query->whereDate('tanggal_peminjaman' , '<=' , $tanggal_peminjaman)
                              ->whereDate('tanggal_kembali', '>=' , $tanggal_peminjaman);
                            })->orwhere(function($query) use($tanggal_peminjaman, $tanggal_kembali){
                              $query->whereDate('tanggal_peminjaman' , '>=' , $tanggal_peminjaman)
                              ->whereDate('tanggal_peminjaman', '<=' , $tanggal_kembali);
                            });
                          })->where('status_peminjaman','dipesan')->first();
                
                if ($isExist != null){
                  Session::flash('Error', 'Sarana sudah dipinjam pada tanggal tersebut');
                } else {
                  Peminjaman_Sarana::insert([
                    'nama_sarana_prasarana' => 'knpi',
                    'nama_pengaju' => $nama_pengaju,
                    'status_pengaju'    => $status_pengaju,
                    'no_telp_pengaju'   => $no_telp_pengaju,
                    'tanggal_peminjaman'    => $tanggal_peminjaman,
                    'tanggal_kembali'   => $tanggal_kembali,
                    'status_pengajuan' => $status_pengajuan,
                    'status_peminjaman' => $status_peminjaman,
                    'created_at'    => $created_at
                  ]);
                  Session::flash('Success', 'Berhasil menambah data peminjaman');
                }
              }
              return redirect()->route('peminjamans');
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
        //
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
        //
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
