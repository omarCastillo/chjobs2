<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUltimoCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ultimo_cargo',function($table){
            $table->increments('id_ultimo_cargo');

            $table->string('empresa',45);
            $table->string('puesto',45);
            $table->date('inicio');
            $table->date('termino');
            $table->boolean('trabajo_actual');
            $table->string('actividades',500);
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
        Schema::drop('ultimo_cargo');
    }
}
