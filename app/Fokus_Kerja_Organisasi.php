<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fokus_Kerja_Organisasi extends Model
{
  protected $table = 'fokus_kerja_organisasi';
  // protected $fillable = ['id_kelompok_potensi_pemuda', 'id_fokus_kerja'];
  protected $guarded = ['id','created_at','updated_at'];
}
