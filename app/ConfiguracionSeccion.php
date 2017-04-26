<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfiguracionSeccion
 */
class ConfiguracionSeccion extends Model
{
    protected $table = 'configuracion_seccion';

    protected $primaryKey = 'id_configuracion_seccion';

	public $timestamps = false;

    protected $fillable = [
        'id_seccion',
        'id_responsable_seccion'
    ];

    protected $guarded = [];

        
}