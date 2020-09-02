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
    public function index( )
    {

         $eventos = Evento::all();
    //     $actividades = Actividad::all();

    //    $eventos = Evento::all()
    //       ->groupBy('actividad_id')
    //       ->map(function ($item) {
    //           return [
    //               $item->first()->actividad->nombre => [
    //                   'Femenino'  => $item->where('genero', 'Femenino')
    //                                       ->count(),
    //                   'Masculino' => $item->where('genero', 'Masculino')
    //                                         ->count(),
    //                   'Niños' => $item->where('edad', '6 a 12 años')
    //                                       ->count(),
    //               ]
    //           ];
    //       })
    //       ->collapse();


          return view('home', compact('eventos'));

    }

     public function grafica(Request $request)
    {

        $id_evento = $request->route('id');
        //Obtener los candidatos y la vacante
        $evento = Evento::findOrFail( $id_evento);


       $arregloEvento = [
           'nombre' => $evento->actividad->nombre,
           'total'  => $evento->femenino + $evento->masculino,
           'niños'  => $evento->masculino,
           'niñas'  => $evento->femenino,
       ];

    //   dd($arregloEvento);

        return  response()->json(['respuesta' => $arregloEvento]);
    }
}
