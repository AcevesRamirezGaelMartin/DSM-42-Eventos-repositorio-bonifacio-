<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locales', function (Blueprint $table) {
            $table->id('idlocales');
            $table->string('nombre');
            $table->unsignedBigInteger('idusuarios');
            $table->foreign('idusuarios')->references('idusuarios')->on('usuarios');    
            $table->string('ubicacion');
            $table->string('telefono');
            $table->string('precio');
            $table->string('capacidad');
            $table->string('tamano');



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
        Schema::dropIfExists('locales');
    }
};
