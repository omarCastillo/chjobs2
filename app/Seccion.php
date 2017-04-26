<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seccion
 */
class Seccion extends Model
{
    protected $table = 'seccion';

    protected $primaryKey = 'id_seccion';

	public $timestamps = false;

    protected $fillable = [
        'nombre_seccion'
    ];

    protected $guarded = [];

        
}