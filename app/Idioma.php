<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Idioma
 */
class Idioma extends Model
{
    protected $table = 'idiomas';

    protected $primaryKey = 'id_idioma';

	public $timestamps = false;

    protected $fillable = [
        'nombre_idioma'
    ];

    protected $guarded = [];

        
}