<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenda3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda3s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kegiatan');
            $table->string('waktu');
            $table->string('sasaran');
            $table->string('jejaring');
            $table->string('pelaksana');
            $table->string('2021');
            $table->string('output');
            $table->string('outcome');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda3s');
    }
}
