<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
  protected $table = 'kegiatan';
  protected $guarded = ['id','created_at','updated_at'];
  public $timestamps = false;
}
