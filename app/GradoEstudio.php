<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GradoEstudio
 */
class GradoEstudio extends Model
{
    protected $table = 'grado_estudios';

    protected $primaryKey = 'id_grado_estudios';

	public $timestamps = false;

    protected $fillable = [
        'profesion',
        'especialidad',
        'esceula',
        'certificado',
        'titulo',
        'cedula'
    ];

    protected $guarded = [];

        
}