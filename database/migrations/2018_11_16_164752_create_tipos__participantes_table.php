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
      Schema::defaultStringLength(250);
        Schema::create('tipos_participantes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_congreso');
            $table->foreign('id_congreso')->references('id')->on('congresos')->onDelete('cascade');
            $table->string('nombre');
            $table->string('descripcion');
            $table->double('costo',8,2);
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
        Schema::dropIfExists('tipos_participantes');
    }
}
