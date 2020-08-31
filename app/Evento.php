<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{

    protected $fillable = [
        'num_evento', 'institucion', 'distrito','actividad_id','observacion','fecha'
    ];

    //Obtiene la actividad en eventos via FK
    public function actividad()
    {
        return $this->belongsTo(Actividad::class);
    }


    //Obtiene la informacion del usuario via FK
    public function asistentes()
    {
        return $this->hasMany(Asistente::class);
    }


}
