<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatInteresadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('interesado',function($table){
            $table->increments('id_interesado');
            $table->string('nombre_interesado',45);
            $table->string('apellidos_interesado',45);

            $table->string('foto',200);
            $table->string('cv',200);

            $table->integer('id_informacion_interesado')->unsigned();
            $table->foreign('id_informacion_interesado')->references('id_informacion_interesado')->on('informacion_interesado');
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
        Schema::drop('interesado');
    }
}
