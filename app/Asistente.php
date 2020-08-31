<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
  protected $fillable = [
    'nombre', 'genero', 'edad', 'ocupacion', 'evento_id'
  ];
}
