<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Organisasi_Kepemudaan extends Model
{
  protected $table = 'kelompok_potensi_pemuda';
  // protected $fillable = ['nama_organisasi', 'id_subkategori', 'struktur_pengurus',
  //                        'kepemilikan_sekretariat', 'alamat', 'unit_usaha', 'kepemilikan_npwp',
  //                        'kepemilikan_adart','lingkup',
  //                        'badan_hukum','suket_domisili','jumlah_anggota','kepengurusan',
  //                        'keanggotaan','visi','misi','logo','nama_ketua','tanggal_berdiri'];
  protected $guarded = ['id','created_at','updated_at'];

  public function User(){
    return $this->hasMany('App\User','id_kelompok_potensi_pemuda');
  }

  public function fokus_kerja(){
    return $this->hasMany('App\Fokus_Kerja_Organisasi', 'id_kelompok_potensi_pemuda');
  }

  public function kepeloporan_organisasi(){
    return $this->belongsToMany('App\Kegiatan_Kepeloporan', 'Kepeloporan_Organisasi', 'id_kelompok_potensi_pemuda', 'id_kegiatan_kepeloporan');
  }

  public function kegiatan_organisasi(){
    return $this->belongsToMany('App\Kegiatan', 'Kegiatan_Organisasi', 'id_kelompok_potensi_pemuda', 'id_kegiatan');
  }

  public function fokus_kerja_organisasi(){
    return $this->belongsToMany('App\Fokus_Kerja', 'Fokus_Kerja_Organisasi', 'id_kelompok_potensi_pemuda', 'id_fokus_kerja');
  }

  public function kegiatan_kepeloporan(){
    return $this->hasMany('App\Kepeloporan_Organisasi', 'id_kelompok_potensi_pemuda');
  }

  public function kegiatan(){
    return $this->hasMany('App\Kegiatan_Organisasi', 'id_kelompok_potensi_pemuda');
  }

  public function subkategori(){
    return $this->belongsTo('App\Subkategori','id_subkategori');
  }

  public function kelurahan(){
    return $this->hasOne('App\Kelurahan','id_kelompok_potensi_pemuda');
  }

  public static function insertGetId($request, $path_foto){
      $nama_organisasi = $request->nama_organisasi;
      $email_organisasi = $request->email_organisasi;
      $no_telp_organisasi = $request->no_telp_organisasi;
      $id_subkategori = $request->subKategori;
      $struktur_pengurus = $request->struktur_pengurus;
      $kepemilikan_sekretariat = $request->kepemilikan_sekretariat;
      $alamat = $request->alamat;
      $unit_usaha = $request->unit_usaha;
      $kepemilikan_npwp = $request->kepemilikan_npwp;
      $kepemilikan_adart = $request->kepemilikan_adart;
      $lingkup = $request->lingkup;
      $badan_hukum = $request->badan_hukum;
      $suket_domisili = $request->suket_domisili;
      $jumlah_anggota = $request->jumlah_anggota;
      $kepengurusan = $request->kepengurusan;
      $keanggotaan = $request->keanggotaan;
      $visi = $request->visi;
      $misi = $request->misi;
      $nama_ketua = $request->nama_ketua;
      $tanggal_berdiri = $request->tanggal_berdiri;

    return DB::table('kelompok_potensi_pemuda')->insertgetId([
            'nama_organisasi'  =>  $nama_organisasi,
            'email_organisasi'  =>  $email_organisasi,
            'no_telp_organisasi'  =>  $no_telp_organisasi,
            'id_subkategori'  =>  $id_subkategori,
            'struktur_pengurus'  =>  $struktur_pengurus,
            'kepemilikan_sekretariat'  =>  $kepemilikan_sekretariat,
            'alamat'  =>  $alamat,
            'unit_usaha'  =>  $unit_usaha,
            'kepemilikan_npwp'  =>  $kepemilikan_npwp,
            'kepemilikan_adart'  =>  $kepemilikan_adart,
            'lingkup'  =>  $lingkup,
            'badan_hukum'  =>  $badan_hukum,
            'suket_domisili'  =>  $suket_domisili,
            'jumlah_anggota'  =>  $jumlah_anggota,
            'kepengurusan'  =>  $kepengurusan,
            'keanggotaan'  =>  $keanggotaan,
            'visi'  =>  $visi,
            'misi'  =>  $misi,
            'nama_ketua'  =>  $nama_ketua,
            'tanggal_berdiri'  =>  $tanggal_berdiri,
            'logo'  =>  $path_foto
          ]);
  }

  public static function updateOrganisasi($request, $id_organisasi, $path_foto){
      $nama_organisasi = $request->nama_organisasi;
      $email_organisasi = $request->email_organisasi;
      $no_telp_organisasi = $request->no_telp_organisasi;
      $id_subkategori = $request->subkategori;
      $struktur_pengurus = $request->struktur_pengurus;
      $kepemilikan_sekretariat = $request->kepemilikan_sekretariat;
      $alamat = $request->alamat;
      $unit_usaha = $request->unit_usaha;
      $kepemilikan_npwp = $request->kepemilikan_npwp;
      $kepemilikan_adart = $request->kepemilikan_adart;
      $lingkup = $request->lingkup;
      $badan_hukum = $request->badan_hukum;
      $suket_domisili = $request->suket_domisili;
      $jumlah_anggota = $request->jumlah_anggota;
      $kepengurusan = $request->kepengurusan;
      $keanggotaan = $request->keanggotaan;
      $visi = $request->visi;
      $misi = $request->misi;
      $nama_ketua = $request->nama_ketua;
      $tanggal_berdiri = $request->tanggal_berdiri;

      $organisasi = Self::find($id_organisasi);
      $organisasi->nama_organisasi = $nama_organisasi;
      $organisasi->email_organisasi = $email_organisasi;
      $organisasi->no_telp_organisasi = $no_telp_organisasi;
      $organisasi->id_subkategori = $id_subkategori;
      $organisasi->struktur_pengurus = $struktur_pengurus;
      $organisasi->kepemilikan_sekretariat = $kepemilikan_sekretariat;
      $organisasi->alamat = $alamat;
      $organisasi->unit_usaha = $unit_usaha;
      $organisasi->kepemilikan_npwp = $kepemilikan_npwp;
      $organisasi->kepemilikan_adart = $kepemilikan_adart;
      $organisasi->lingkup = $lingkup;
      $organisasi->badan_hukum = $badan_hukum;
      $organisasi->suket_domisili = $suket_domisili;
      $organisasi->jumlah_anggota = $jumlah_anggota;
      $organisasi->kepengurusan = $kepengurusan;
      $organisasi->keanggotaan = $keanggotaan;
      $organisasi->visi = $visi;
      $organisasi->misi = $misi;
      $organisasi->nama_ketua = $nama_ketua;
      $organisasi->tanggal_berdiri = $tanggal_berdiri;
      if($path_foto != null){
        $organisasi->logo = $path_foto;
      }
      $organisasi->save();
  }

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
