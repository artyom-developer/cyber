<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usuarios', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('email');
          $table->string('nombre');
          $table->string('apellido');
          $table->string('tipo_doc')->nullable($value = true);
          $table->string('documento')->nullable($value = true);
          $table->date('fecha_nacimiento')->nullable($value = true);
          $table->integer('estrato')->nullable($value = true);
          $table->integer('telefono')->nullable($value = true);
          $table->string('ciudad')->nullable($value = true);
          $table->string('direccion')->nullable($value = true);
          $table->string('ubicacion')->nullable($value = true);
          $table->string('genero')->nullable($value = true);
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
        //
    }
}
