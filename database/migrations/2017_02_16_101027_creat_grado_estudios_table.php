<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatGradoEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grado_estudios',function($table){
            $table->increments('id_grado_estudios');
            $table->string('profesion',45);
            $table->string('especialidad',45);
            $table->string('esceula',45);
            $table->boolean('certificado');
            $table->boolean('titulo');
            $table->string('cedula',45);
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
        Schema::drop('grado_estudios');
    }
}
