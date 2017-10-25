<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table='conductor';
    protected $primaryKey='id_conductor';
    protected $fillable=['nombre','apellido','telefono','direccion','correo','id_bus'];

    public function bus (){
        return $this->belongsTo('App\Bus');
    }
}
