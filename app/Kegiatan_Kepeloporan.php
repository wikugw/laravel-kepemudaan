<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan_Kepeloporan extends Model
{
  protected $table = 'kegiatan_kepeloporan';
  protected $guarded = ['id','created_at','updated_at'];
  public $timestamps = false;
}
