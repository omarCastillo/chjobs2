<?php

use App\Vacante;
use App\ConfiguracionVacante;
use App\Requisito;
use App\Lugar;
use App\Tag;
use App\ResponsableSeccion;
use App\Seccion;
use App\Actividade;
use App\Jornada;


use Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registroPostulante extends Controller
{
    //

    public function nuevaVacante(){
        return view('nueva-vacante');
    }

    public function registrar_nuevo_vacante(){

    	$data = Request::all();

    	$vacante -> nombre_vacante = $data ["nombre_vacante"];
    	$vacante -> descripcion_vacante = $data ["descripcion_vacante"];
    	$vacante -> salario = $salario ["salario"];
    	$vacante -> nombre_actividad = $data ["nombre_actividad"];
    	$vacante -> nombre_requisito = $data ["nombre_requisito"];
    	$vacante -> nombre_lugar = $data ["nombre_lugar"];
    	$vacante -> tipo_jornada = $data ["tipo_jornada"];
    	$vacante -> nombre_tag = $data ["nombre_tag"];

    	$result = $vacante->save();
    }

    public function consulta_vacantes()
   {
        $vacante = Request::all();
        return View::make('admin/users/list')->with('users', $vacante);
   }

   public function elimina_vacantes($id_vacantes)
   {
        Vacante::destroy($id_vacantes);
   }
}
