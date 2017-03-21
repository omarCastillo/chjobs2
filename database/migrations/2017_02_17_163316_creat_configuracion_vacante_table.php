<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatConfiguracionVacanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('configuracion_vacante',function($table){
            $table->increments('id_configuracion_vacante');

            $table->integer('salario');
            
            $table->integer('id_actividad')->unsigned();
            $table->foreign('id_actividad')->references('id_actividad')->on('actividades');

            $table->integer('id_requisitos')->unsigned();
            $table->foreign('id_requisitos')->references('id_requisitos')->on('requisitos');

            $table->integer('id_lugar')->unsigned();
            $table->foreign('id_lugar')->references('id_lugar')->on('lugar');

            $table->integer('id_jornada')->unsigned();
            $table->foreign('id_jornada')->references('id_jornada')->on('jornada');

            $table->integer('id_tag')->unsigned();
            $table->foreign('id_tag')->references('id_tag')->on('tags');

    $table->integer('id_configuracion_seccion')->unsigned();
    $table->foreign('id_configuracion_seccion')->references('id_configuracion_seccion')->on('configuracion_seccion');

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
        Schema::drop('configuracion_vacante');
    }
}
