<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLahirMasukPindahMeninggalKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lahir_masuk_pindah_meninggal_keluars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kelompok');
            $table->integer('l_lahir');
            $table->integer('p_lahir');
            $table->integer('l_masuk');
            $table->integer('p_masuk');
            $table->integer('l_pindah');
            $table->integer('p_pindah');
            $table->integer('l_meninggal');
            $table->integer('p_meninggal');
            $table->integer('l_keluar');
            $table->integer('p_keluar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lahir_masuk_pindah_meninggal_keluars');
    }
}
