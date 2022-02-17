<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaKatekisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_katekisasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kelompok');
            $table->integer('kk');
            $table->integer('l_pemuda');
            $table->integer('p_pemuda');
            $table->integer('l_remaja');
            $table->integer('p_remaja');
            $table->integer('l_baptisdewasa');
            $table->integer('p_baptisdewasa');
            $table->integer('peserta_nikah_pasangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_katekisasis');
    }
}
