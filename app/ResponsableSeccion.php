<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ResponsableSeccion
 */
class ResponsableSeccion extends Model
{
    protected $table = 'responsable_seccion';

    protected $primaryKey = 'id_responsable_seccion';

	public $timestamps = false;

    protected $fillable = [
        'nombre_responsable',
        'apellidos_responsable',
        'correo_responsable'
    ];

    protected $guarded = [];

        
}