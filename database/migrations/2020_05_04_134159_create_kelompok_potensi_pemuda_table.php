<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelompokPotensiPemudaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompok_potensi_pemuda', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengaju');
            $table->unsignedBigInteger('id_subkategori');
            $table->enum('struktur_pengurus', ['struktural', 'non_struktural']);
            $table->enum('kepemilikan_sekretariat', ['ada', 'tidak_ada']);
            $table->text('alamat');
            $table->enum('unit_usaha', ['ada', 'tidak_ada']);
            $table->enum('kepemilikan_npwp', ['ada', 'tidak_ada']);
            $table->enum('kepemilikan_ad/art', ['ada', 'tidak_ada']);
            $table->unsignedBigInteger('id_fokus_kerja_organisasi');
            $table->enum('lingkup', ['nasional', 'lokal']);
            $table->enum('badan_hukum', ['ada', 'tidak_ada']);
            $table->enum('suket_domisili', ['belum_memiliki', 'sudah_memiliki']);
            $table->integer('jumlah_anggota');
            $table->enum('masa_kepengurusan', ['ada', 'tidak_ada']);
            $table->enum('keanggotaan', ['anggota/kader', 'non_keanggotaan']);
            $table->string('visi');
            $table->text('misi');
            $table->string('logo');
            $table->string('nama_ketua');
            $table->date('tanggal_berdiri');
            $table->unsignedBigInteger('id_kepeloporan_organisasi');
            $table->unsignedBigInteger('id_kegiatan_organisasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelompok_potensi_pemuda');
    }
}
