<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origen_Destino extends Model
{
    protected $table='origen_destino';
    protected $primaryKey='id_origen_destino';
    protected $fillable=['origen','destino','precio'];

    public function horarios(){
        return  $this->hasMany('App\Horario','id_horario');
    }
}
