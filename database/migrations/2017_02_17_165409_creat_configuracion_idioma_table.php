<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatConfiguracionIdiomaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('configuracion_idioma',function($table){
            $table->increments('id_configuracion_idioma');

            $table->integer('lectura');
            $table->integer('escritura');
            $table->integer('habla');            

            $table->integer('id_idioma')->unsigned();
            $table->foreign('id_idioma')->references('id_idioma')->on('idiomas');

            
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
         Schema::drop('configuracion_idioma');
    }
}
