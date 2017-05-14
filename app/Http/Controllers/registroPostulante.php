<?php

use App\Interesado;
use App\InformacionInteresado;
use Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registroPostulante extends Controller
{
    //

    public function registroPostulante(){
        return view('registro-postulante');
    }

    public function registrar_nuevo_postulante(){

    	$data = Request::all();

    	$postulante -> nombre_interesado = $data ["nombre_interesado"];
    	$postulante -> apellidos_interesado = $data ["apellidos_interesado"];
    	$postulante -> edad = $data ["edad"];
    	$postulante -> telefono_casa = $data ["telefono_casa"];
    	$postulante -> telefono_celular = $data ["telefono_celular"];
    	$postulante -> correo_electronico = $data ["correo_electronico"];
    	$postulante -> cp = $data ["cp"];
    	$postulante -> estado = $data ["estado"];
    	$postulante -> colonia = $data ["colonia"];

    	$result = $postulante->save();
    }

    public function consulta_postulantes()
   {
        $postulante = Request::all();
        return View::make('admin/users/list')->with('users', $postulante);
   }
}
