<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfiguracionVacante
 */
class ConfiguracionVacante extends Model
{
    protected $table = 'configuracion_vacante';

    protected $primaryKey = 'id_configuracion_vacante';

	public $timestamps = false;

    protected $fillable = [
        'salario',
        'id_actividad',
        'id_requisitos',
        'id_lugar',
        'id_jornada',
        'id_tag',
        'id_configuracion_seccion'
    ];

    protected $guarded = [];

        
}