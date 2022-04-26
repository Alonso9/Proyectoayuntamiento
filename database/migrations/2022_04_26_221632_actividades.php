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
        //
        Schema::create('actividades', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('programa_id');
            $table->text('actividad');
            $table->text('descripcion');
            $table->unsignedBigInteger('responsable');
            $table->dateTime('fecha');
            //$table->string('responsable');
            // $table->foreign('programa_id')->references('id')->on('programas');
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
        Schema::dropIfExists('actividades');
    }
};
