<?php

namespace App;

use App\maestros;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class materias extends Model
{
  
    use Notifiable;
    protected $fillable = [
'nombre',
    ];

    public function maestross()
    {
        //un producto posee muchas transacciones es decir  un producto  esta en muchas transacciones hasMany(tiene much@s)
        return $this->hasMany('App\maestros',maestros::class);
    }
    
    public function scopenombre($query)
    {
        return $query->where('nombre','PROGRAMACION');
    }
}
