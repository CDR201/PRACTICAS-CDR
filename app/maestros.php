<?php

namespace App;

use\App\materias;
use Illuminate\Database\Eloquent\Model;

class maestros extends Model
{
    protected $fillable = [
    	'nombre',
    	'apellido',
        'edad',
        'id',
    ];

    public function materiass()
    {
        //una transacci{on pertenece a un (belongsTo) produto 
    	return $this->belongsTo(materias::class);
    }

    public function scopeedad($query)
    {
        return $query->where('edad','>', 30);
    }
}

