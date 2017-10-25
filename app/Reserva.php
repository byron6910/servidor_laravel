<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table='reserva';
    protected $primaryKey='id_reserva';
    protected $fillable=['num_reserva','estado','ci','id_viaje'];

    public function reserva(){
        return  $this->belongsTo('App\Usuario');
    }

    public function viaje(){
        return  $this->belongs('App\Viaje');
    }
}
