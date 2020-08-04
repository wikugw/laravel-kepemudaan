<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sarana_Prasarana extends Model
{
  protected $table = 'sarana_prasarana';
  // protected $fillable = ['nama_sarana_prasana', 'kategori', 'id_kelurahan'];
  protected $guarded = ['id','created_at','updated_at'];

  public function kelurahan()
  {
      return $this->belongsTo('App\Kelurahan','id_kelurahan');
  }
}
