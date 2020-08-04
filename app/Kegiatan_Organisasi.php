<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan_Organisasi extends Model
{
  protected $table = 'kegiatan_organisasi';
  // protected $fillable = ['id_kelompok_potensi_pemuda', 'id_kegiatan'];
  protected $guarded = ['id','created_at','updated_at'];
}
