<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table='horarios';
    protected $primaryKey='id_horario';
    protected $fillable=['fecha_horario','hora','id_origen_destino'];


    public function origen_destino(){
        return  $this->belongsTo('App\Origen_Destino');
    }
    public function viajes(){
        return  $this->hasMany('App\Viaje','id_viaje');
    }
}
