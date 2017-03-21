<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('vacantes',function($table){
            $table->increments('id_vacantes');

            $table->string('nombre_vacante',50);
            $table->string('descripcion',300);
            $table->integer('status');

            
            $table->integer('id_configuracion_vacante')->unsigned();
            $table->foreign('id_configuracion_vacante')->references('id_configuracion_vacante')->on('configuracion_vacante');

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
        Schema::drop('vacantes');
    }
}
