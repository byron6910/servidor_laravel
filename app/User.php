<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';
     protected $fillable = [
         'nombre','apellido','telefono','ciudad','calle','postal','email', 'usuario','password','api_token','foto'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token'
    ];

    public function reservas(){
        return  $this->hasMany('App\Reserva','id_reserva');
    }

    public function GetName()
    {
        return $this->nombre. ' '. $this->apellido;
    }
}
