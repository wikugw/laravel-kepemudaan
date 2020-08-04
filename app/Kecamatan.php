<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
  protected $table = 'kecamatan';
  // protected $fillable = ['nama_kecamatan'];
  protected $guarded = ['id','created_at','updated_at'];

  public function kelurahan(){
    return $this->hasMany('App\Kelurahan','id_kecamatan');
  }

  public function program_kerja(){
    return $this->hasMany('App\Program_Kerja','id_kecamatan');
  }
}
