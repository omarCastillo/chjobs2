<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Especialidad
 */
class Especialidad extends Model
{
    protected $table = 'especialidad';

    protected $primaryKey = 'id_especialidad';

	public $timestamps = false;

    protected $fillable = [
        'nombre_especialidad'
    ];

    protected $guarded = [];

        
}