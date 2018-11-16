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
      Schema::defaultStringLength(250);
        Schema::create('participantes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_congreso');
            $table->foreign('id_congreso')->references('id')->on('congresos');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('id_personal', 20)->unique();
            $table->string('institucion');
            $table->string('email',100)->unique();
            $table->unsignedInteger('id_tipo_participante');
            $table->foreign('id_tipo_participante')->references('id')->on('tipos_participantes');
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
