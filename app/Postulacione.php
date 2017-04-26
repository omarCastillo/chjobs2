<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Postulacione
 */
class Postulacione extends Model
{
    protected $table = 'postulaciones';

    protected $primaryKey = 'id_postulaciones';

	public $timestamps = false;

    protected $fillable = [
        'fecha_postulacion',
        'id_publicacion',
        'id_interesado'
    ];

    protected $guarded = [];

        
}