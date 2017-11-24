<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTratamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->text('detalles')->nullable();
            $table->boolean('estado')->nullable();
            $table->integer('precio');
            $table->integer('monto_pagado');
            $table->boolean('pagado');
            $table->integer('id_hClinicas')->unsigned();
            $table->integer('id_dientes')->unsigned();//porque hay tratamientos que no se realiza en un diente especifico
            //la relacion a la tabla de diagnosticos queda pendiente
            $table->foreign('id_hClinicas')->references('id')->on('historias_clinicas')->onDelete('cascade');
            $table->foreign('id_dientes')->references('id')->on('dientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tratamientos');
    }
}
