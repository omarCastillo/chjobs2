<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatResponsaleSeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creamos la tabla requisitos
        Schema::create('responsable_seccion',function($table){
            $table->increments('id_responsable_seccion');
            $table->string('nombre_responsable',45);
            $table->string('apellidos_responsable',45);
            $table->string('correo_responsable',45);
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('responsable_seccion');
    }
}
