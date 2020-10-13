<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class materias extends Model
{
  
    use Notifiable;
    protected $fillable = [
'nombre',
    ];
    
}
