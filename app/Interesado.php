<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Interesado
 */
class Interesado extends Model
{
    protected $table = 'interesado';

    protected $primaryKey = 'id_interesado';

	public $timestamps = false;

    protected $fillable = [
        'nombre_interesado',
        'apellidos_interesado',
        'foto',
        'cv',
        'id_informacion_interesado'
    ];

    protected $guarded = [];

        
}