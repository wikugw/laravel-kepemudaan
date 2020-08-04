<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan_Disporapar extends Model
{
  protected $table = 'kegiatan_disporapar';
  // protected $fillable = ['judul', 'kategori', 'isi', 'gambar'];
  protected $guarded = ['id','created_at','updated_at'];
}
