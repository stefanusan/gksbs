<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaptisSidiPertobatanTunanganPernikahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baptis_sidi_pertobatan_tunangan_pernikahans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kelompok');
            $table->integer('l_baptisanak');
            $table->integer('p_baptisanak');
            $table->integer('l_baptisdewasa');
            $table->integer('p_baptisdewasa');
            $table->integer('l_sidi');
            $table->integer('p_sidi');
            $table->integer('l_tobat');
            $table->integer('p_tobat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baptis_sidi_pertobatan_tunangan_pernikahans');
    }
}
