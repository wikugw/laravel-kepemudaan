<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Peminjaman_Sarana extends Model
{
    protected $table = 'peminjaman_sarana';
    // protected $fillable = ['nama_sarana_prasarana', 'nama_pengaju', 'status_pengaju',
    //                        'no_telp_pengaju', 'tanggal_peminjaman', 'tanggal_kembali',
    //                        'status_pengajuan','status_peminjaman'];
    protected $guarded = ['id','created_at','updated_at'];

    public static function beginTransaction(){
        return DB::beginTransaction();
    }
    
    public static function dbCommit(){
        return DB::commit();
    }
    
    public static function dbRollback(){
        return DB::rollback();
    }
}
