<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Publicacione
 */
class Publicacione extends Model
{
    protected $table = 'publicaciones';

    protected $primaryKey = 'id_publicacion';

	public $timestamps = false;

    protected $fillable = [
        'fecha_publicacion',
        'publicacion_activa',
        'id_admin',
        'id_vacantes'
    ];

    protected $guarded = [];

        
}