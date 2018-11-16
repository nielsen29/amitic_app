<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_congreso');
            $table->foreign('id_congreso')->references('id')->on('congresos');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('id_personal')->unique()->nullable(false);
            $table->string('institucion');
            $table->string('email')->unique()->nullable(false);
            $table->unsignedInteger('id_tipo_participante');
            $table->foreign('id_tipo_participante')->references('id')->on('tipos__participantes');
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
        Schema::dropIfExists('participantes');
    }
}
