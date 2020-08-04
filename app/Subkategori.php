<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
  protected $table = 'subkategori';
  protected $guarded = ['id','created_at','updated_at'];
  public $timestamps = false;

  public function organisasi_kepemudaan(){
    return $this->hasMany('App\Organisasi_Kepemudaan','id_subkategori');
  }
}
