<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creamos la tabla admin
        Schema::create('admin',function($table){
            $table->increments('id_admin');
            $table->string('nombre_admin',45);
            $table->string('apellidos_admin',45);
            $table->string('password',45);
            $table->string('correo_electronico_admin',45);
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
        Schema::drop('admin');
    }
}
