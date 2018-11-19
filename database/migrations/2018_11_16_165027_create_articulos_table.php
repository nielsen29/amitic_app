<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::defaultStringLength(250);
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_participante');
            $table->foreign('id_participante')->references('id')->on('participantes')->onDelete('cascade');
            $table->string('titulo');
            $table->string('resumen');
            $table->string('tmp_archivo');
            $table->string('archivo');
            $table->integer('estado');
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
        Schema::dropIfExists('articulos');
    }
}
