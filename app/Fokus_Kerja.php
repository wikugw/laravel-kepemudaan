<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fokus_Kerja extends Model
{
  protected $table = 'fokus_kerja';
  protected $guarded = ['id','created_at','updated_at'];
  public $timestamps = false;
}
