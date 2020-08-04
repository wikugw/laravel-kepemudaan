<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFokusKerjaOrganisasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fokus_kerja_organisasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kelompok_potensi_pemuda');
            $table->unsignedBigInteger('id_fokus_kerja');
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
        Schema::dropIfExists('fokus_kerja_organisasi');
    }
}
