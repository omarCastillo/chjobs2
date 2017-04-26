<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lugar
 */
class Lugar extends Model
{
    protected $table = 'lugar';

    protected $primaryKey = 'id_lugar';

	public $timestamps = false;

    protected $fillable = [
        'nombre_lugar'
    ];

    protected $guarded = [];

        
}