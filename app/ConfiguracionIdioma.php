<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfiguracionIdioma
 */
class ConfiguracionIdioma extends Model
{
    protected $table = 'configuracion_idioma';

    protected $primaryKey = 'id_configuracion_idioma';

	public $timestamps = false;

    protected $fillable = [
        'lectura',
        'escritura',
        'habla',
        'id_idioma'
    ];

    protected $guarded = [];

        
}