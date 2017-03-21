<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatPublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('publicaciones',function($table){
            $table->increments('id_publicacion');

            $table->date('fecha_publicacion');
            $table->boolean('publicacion_activa');

            $table->integer('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id_admin')->on('admin');

            $table->integer('id_vacantes')->unsigned();
            $table->foreign('id_vacantes')->references('id_vacantes')->on('vacantes');

            
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
        Schema::drop('publicaciones');
    }
}
