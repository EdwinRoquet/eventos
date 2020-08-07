<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\Evento;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpParser\JsonDecoder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $actividades = Actividad::all();

       $eventos = Evento::all()
          ->groupBy('actividad_id')
          ->map(function ($item) {
              return [
                  $item->first()->actividad->nombre => [
                      'Femenino'  => $item->where('genero', 'Femenino')
                                          ->count(),
                      'Masculino' => $item->where('genero', 'Masculino')
                                          ->count(),
                  ]
              ];
          })
          ->collapse();




          return view('home')->with('eventos', $eventos)->with('actividades', $actividades);

    }
}
