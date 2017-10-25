<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    public function reservas(){
        return  $this->hasMany('App\Reserva','id_reserva');
    }

    public function cooperativa(){
        return  $this->belongsTo('App\Cooperativa');
    }

    public function horario(){
        return  $this->belongsTo('App\Horario');
    }
}
