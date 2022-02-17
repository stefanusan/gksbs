<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnakRemajaPemudasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak_remaja_pemudas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kelompok');
            $table->integer('l_anak');
            $table->integer('p_anak');
            $table->integer('l_remaja');
            $table->integer('p_remaja');
            $table->integer('l_pemuda');
            $table->integer('p_pemuda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anak_remaja_pemudas');
    }
}
