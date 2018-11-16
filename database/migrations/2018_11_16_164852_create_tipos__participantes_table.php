<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos__participantes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_congreso');
            $table->foreign('id_congreso')->references('id')->on('congresos');
            $table->string('nombre');
            $table->string('descripcion');
            $table->double('costo');
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
        Schema::dropIfExists('tipos__participantes');
    }
}
