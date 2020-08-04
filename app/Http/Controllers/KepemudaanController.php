<?php

namespace App\Http\Controllers;
use App\Organisasi_Kepemudaan;
use App\Kecamatan;
use App\Subkategori;

use Illuminate\Http\Request;

class KepemudaanController extends Controller
{
    public function halaman_list_organisasi($subkategori){
        $data_organisasi = Organisasi_Kepemudaan::where('id_subkategori', $subkategori)->get();
          $subKategori = Subkategori::find($subkategori);
          $data_kecamatan = Kecamatan::with('kelurahan')->get();
          $data_subkategori = Subkategori::with('organisasi_kepemudaan')->get();
          return view('landing/v_lihat_organisasi')->with(['data_organisasi' => $data_organisasi, 'subKategori' => $subKategori,'data_kecamatan'=>$data_kecamatan,
                                                          'data_subkategori' => $data_subkategori]);
      }

      public function logout(){
        Auth::logout();
        return redirect('/');
      }
}
