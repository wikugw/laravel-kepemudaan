<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepeloporanOrganisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepeloporan_organisasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kelompok_potensi_pemuda');
            $table->unsignedBigInteger('id_kegiatan_kepeloporan');
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
        Schema::dropIfExists('kepeloporan_organisasi');
    }
}
