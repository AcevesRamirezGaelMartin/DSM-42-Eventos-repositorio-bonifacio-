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
        Schema::create('consumibles', function (Blueprint $table) {
            $table->id('idconsumibles');
            $table->string('sillas');
            $table->string('mesas');
            $table->string('comida');
            $table->string('bebidas');
            $table->string('decoraciones');
            $table->unsignedBigInteger('ideventos');
            $table->foreign('ideventos')->references('ideventos')->on('eventos');    
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
        Schema::dropIfExists('consumibles');
    }
};
