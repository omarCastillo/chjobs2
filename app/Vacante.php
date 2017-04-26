<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vacante
 */
class Vacante extends Model
{
    protected $table = 'vacantes';

    protected $primaryKey = 'id_vacantes';

	public $timestamps = false;

    protected $fillable = [
        'nombre_vacante',
        'descripcion',
        'status',
        'id_configuracion_vacante'
    ];

    protected $guarded = [];

        
}