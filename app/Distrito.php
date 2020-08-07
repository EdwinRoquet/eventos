<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $fillable = [
        'clave_distrito', 'clave', 'nombre',
    ];

}
