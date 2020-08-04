<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peminjaman_sarana;

class VerifikasiPeminjamanController extends Controller
{
    public function terima($id){
        $find = peminjaman_sarana::find($id);
        $find->status_pengajuan = 'verifikasi';
        $find->save();
        Session::flash('Success', 'Berhasil merubah status pengajuan menjadi verifikasi');
        return redirect()->route('peminjaman_sarana');
      }
  
      public function tolak($id){
        $find = peminjaman_sarana::find($id);
        $find->status_pengajuan = 'tolak';
        $find->save();
        Session::flash('Success', 'Berhasil merubah status pengajuan menjadi verifikasi');
        return redirect()->route('peminjaman_sarana');
      }
}
