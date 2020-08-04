<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaranaPrasaranaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sarana_prasarana', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sarana_prasana');
            $table->enum('kategori', ['pertemuan_olahraga', 'coworking', 'kepemudaan']);
            $table->unsignedBigInteger('id_kelurahan');
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
        Schema::dropIfExists('sarana_prasarana');
    }
}
