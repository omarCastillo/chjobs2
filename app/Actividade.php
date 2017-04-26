<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actividade
 */
class Actividade extends Model
{
    protected $table = 'actividades';

    protected $primaryKey = 'id_actividad';

	public $timestamps = false;

    protected $fillable = [
        'nombre_actividad'
    ];

    protected $guarded = [];

        
}