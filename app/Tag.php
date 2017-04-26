<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 */
class Tag extends Model
{
    protected $table = 'tags';

    protected $primaryKey = 'id_tag';

	public $timestamps = false;

    protected $fillable = [
        'nombre_tag'
    ];

    protected $guarded = [];

        
}