<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Jornada
 */
class Jornada extends Model
{
    protected $table = 'jornada';

    protected $primaryKey = 'id_jornada';

	public $timestamps = false;

    protected $fillable = [
        'tipo_jornada'
    ];

    protected $guarded = [];

        
}