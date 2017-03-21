<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatConfiguracionSeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('configuracion_seccion',function($table){
            $table->increments('id_configuracion_seccion');

            
            $table->integer('id_seccion')->unsigned();
            $table->foreign('id_seccion')->references('id_seccion')->on('seccion');

    $table->integer('id_responsable_seccion')->unsigned();
    $table->foreign('id_responsable_seccion')->references('id_responsable_seccion')->on('responsable_seccion');

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
        Schema::drop('configuracion_seccion');
    }
}
