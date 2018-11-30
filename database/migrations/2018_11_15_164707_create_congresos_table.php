<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congresos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer ('edicion');
            $table->integer('year');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->string('pais');
            $table->string('lugar');
            $table->string ('descripcion');
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
        Schema::dropIfExists('congresos');

    }
}
