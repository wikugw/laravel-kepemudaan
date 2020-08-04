<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramKerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_kerja', function (Blueprint $table) {
            $table->id();
            $table->string('nama_program_kerja');
            $table->enum('kategori', ['keagamaan', 'penyadaran_hukum', 'olahraga',
                                      'pendidikan', 'sosial', 'seni', 'budaya',
                                      'ketahanan_pangan', 'lingkungan_hidup', 'sosial_budaya',
                                      'kepeloporan_pendidikan', 'inotek', 'kewirausahaan']);
            $table->unsignedBigInteger('id_kelurahan');
            $table->unsignedBigInteger('id_kecamatan');
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
        Schema::dropIfExists('program_kerja');
    }
}
