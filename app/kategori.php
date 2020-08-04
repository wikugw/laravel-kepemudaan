<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    // protected $fillable = ['id_kelompok_potensi_pemuda', 'id_fokus_kerja'];
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
