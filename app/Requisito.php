<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Requisito
 */
class Requisito extends Model
{
    protected $table = 'requisitos';

    protected $primaryKey = 'id_requisitos';

	public $timestamps = false;

    protected $fillable = [
        'nombre_requisito'
    ];

    protected $guarded = [];

        
}