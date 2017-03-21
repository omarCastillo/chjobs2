<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatPostulacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('postulaciones',function($table){
            $table->increments('id_postulaciones');

            $table->date('fecha_postulacion');

            $table->integer('id_publicacion')->unsigned();
            $table->foreign('id_publicacion')->references('id_publicacion')->on('publicaciones');

            $table->integer('id_interesado')->unsigned();
            $table->foreign('id_interesado')->references('id_interesado')->on('interesado');


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
        Schema::drop('postulaciones');
    }
}
