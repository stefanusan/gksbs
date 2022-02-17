<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJiwasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jiwas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kelompok');
            $table->integer('kk');
            $table->integer('l_dewasa');
            $table->integer('p_dewasa');
            $table->integer('l_pemuda');
            $table->integer('p_pemuda');
            $table->integer('l_remaja');
            $table->integer('p_remaja');
            $table->integer('l_anak');
            $table->integer('p_anak');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jiwas');
    }
}
