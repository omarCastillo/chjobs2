<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InformacionInteresado
 */
class InformacionInteresado extends Model
{
    protected $table = 'informacion_interesado';

    protected $primaryKey = 'id_informacion_interesado';

	public $timestamps = false;

    protected $fillable = [
        'edad',
        'telefono_casa',
        'telefono_celular',
        'correo_electronico',
        'cp',
        'estado',
        'colonia',
        'id_grado_estudios',
        'id_especialidad',
        'id_configuracion_idioma',
        'id_ultimo_cargo',
        'id_curso'
    ];

    protected $guarded = [];

        
}