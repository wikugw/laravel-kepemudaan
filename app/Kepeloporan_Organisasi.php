<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepeloporan_Organisasi extends Model
{
  protected $table = 'kepeloporan_organisasi';
  // protected $fillable = ['id_kelompok_potensi_pemuda', 'id_kegiatan_kepeloporan'];
  protected $guarded = ['id','created_at','updated_at'];
}
