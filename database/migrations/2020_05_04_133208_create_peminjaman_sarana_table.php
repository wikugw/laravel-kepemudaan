<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanSaranaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_sarana', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sarana_prasarana');
            $table->string('nama_pengaju');
            $table->enum('status_pengaju', ['umum', 'organisasi_kepemudaan']);
            $table->BigInteger('no_telp_pengaju');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_kembali');
            $table->enum('status_peminjaman', ['dipesan', 'selesai']);
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
        Schema::dropIfExists('peminjaman_sarana');
    }
}
