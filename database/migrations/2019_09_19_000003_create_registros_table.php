<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->increments('id');

            $table->string('fecha')->nullable();

            $table->string('hora')->nullable();

            $table->string('origen')->nullable();

            $table->string('destino')->nullable();

            $table->string('duracion')->nullable();

            $table->string('codigo')->nullable();

            $table->string('fecha_larga')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
