<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitesParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::defaultStringLength(250);
        Schema::create('commites_participantes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_participante');
            $table->foreign('id_participante')->references('id')->on('participantes');
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
        Schema::dropIfExists('commites__participantes');
    }
}
