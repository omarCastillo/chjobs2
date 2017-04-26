<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 */
class Admin extends Model
{
    protected $table = 'admin';

    protected $primaryKey = 'id_admin';

	public $timestamps = false;

    protected $fillable = [
        'nombre_admin',
        'apellidos_admin',
        'password',
        'correo_electronico_admin'
    ];

    protected $guarded = [];

        
}