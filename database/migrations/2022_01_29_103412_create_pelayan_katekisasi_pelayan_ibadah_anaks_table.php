<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelayanKatekisasiPelayanIbadahAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayan_katekisasi_pelayan_ibadah_anaks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kelompok');
            $table->integer('l_katekisasi');
            $table->integer('p_katekisasi');
            $table->integer('l_pelayananak');
            $table->integer('p_pelayananak');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelayan_katekisasi_pelayan_ibadah_anaks');
    }
}
