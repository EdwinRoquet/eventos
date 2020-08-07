<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{

    protected $fillable = [
        'num_evento', 'institucion', 'distrito','actividad_id','user_id','genero','edad','ocupacion','observacion',
    ];

    //Obtiene la actividad en eventos via FK
    public function actividad()
    {
        return $this->belongsTo(Actividad::class);
    }


    //Obtiene la informacion del usuario via FK
    public function autor()
    {
        return$this->belongsTo(User::class, 'user_id'); //FK de esta tabla
    }



}
