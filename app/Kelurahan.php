<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
  protected $table = 'kelurahan';
  // protected $fillable = ['nama_kelurahan', 'id_kelompok_potensi_pemuda', 'id_kecamatan'];
  protected $guarded = ['id','created_at','updated_at'];

  public function kecamatan() {
    return $this->belongsTo('App\Kecamatan','id_kecamatan');
  }

  public function sarana_prasarana(){
    return $this->hasMany('App\Sarana_Prasarana','id_kelurahan');
  }

  public function program_kerja(){
    return $this->hasMany('App\Program_Kerja','id_kelurahan');
  }

  public function organisasi_kepemudaan(){
    return $this->belongsTo('App\Organisasi_Kepemudaan','id_kelompok_potensi_pemuda');
  }

}
