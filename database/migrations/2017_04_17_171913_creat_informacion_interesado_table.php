<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatInformacionInteresadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('informacion_interesado',function($table){
            $table->increments('id_informacion_interesado');

            $table->integer('edad');

            $table->integer('telefono_casa');
            $table->integer('telefono_celular');
            $table->string('correo_electronico',50);
            $table->integer('cp');
            $table->string('estado',50);
            $table->string('colonia',50);
            
            $table->integer('id_grado_estudios')->unsigned();
            $table->foreign('id_grado_estudios')->references('id_grado_estudios')->on('grado_estudios');

            $table->integer('id_especialidad')->unsigned();
            $table->foreign('id_especialidad')->references('id_especialidad')->on('especialidad');

            $table->integer('id_configuracion_idioma')->unsigned();
            $table->foreign('id_configuracion_idioma')->references('id_configuracion_idioma')->on('configuracion_idioma');

            $table->integer('id_ultimo_cargo')->unsigned();
            $table->foreign('id_ultimo_cargo')->references('id_ultimo_cargo')->on('ultimo_cargo');

            $table->integer('id_curso')->unsigned();
            $table->foreign('id_curso')->references('id_curso')->on('curso');


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
        Schema::drop('informacion_interesado');
    }
}
