<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 */
class Curso extends Model
{
    protected $table = 'curso';

    protected $primaryKey = 'id_curso';

	public $timestamps = false;

    protected $fillable = [
        'nombre_curso',
        'institucion',
        'status'
    ];

    protected $guarded = [];

        
}