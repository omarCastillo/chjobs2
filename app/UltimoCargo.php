<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UltimoCargo
 */
class UltimoCargo extends Model
{
    protected $table = 'ultimo_cargo';

    protected $primaryKey = 'id_ultimo_cargo';

	public $timestamps = false;

    protected $fillable = [
        'empresa',
        'puesto',
        'inicio',
        'termino',
        'trabajo_actual',
        'actividades'
    ];

    protected $guarded = [];

        
}