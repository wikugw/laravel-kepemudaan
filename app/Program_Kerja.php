<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program_Kerja extends Model
{
    protected $table = 'program_kerja';
    // protected $fillable = ['nama_program_kerja', 'kategori', 'id_kelurahan', 'id_kecamatan'];
    protected $guarded = ['id','created_at','updated_at'];

    public function kelurahan()
    {
        return $this->belongsTo('App\Kelurahan','id_kelurahan');
    }

    public function kecamatan()
    {
        return $this->belongsTo('App\Kecamatan','id_kecamatan');
    }
}
