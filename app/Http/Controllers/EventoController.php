<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Distrito;
use App\Actividad;
use Illuminate\Http\Request;
use App\Exports\EventosExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PHPUnit\Framework\Constraint\Count;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Por si quieres que un solo usuario quieres que pueda ver solo sus eventos

        // $usuario = Auth::user();
        // $eventos = Evento::where('user_id', $usuario->id)->paginate(10);

        $totalRegistro = Evento::count();
        $eventos = Evento::paginate(10);
        return view('eventos.index')->with('eventos', $eventos)->with('totalRegistro',$totalRegistro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividades = Actividad::all();
        $distritos = Distrito::all();

        return view('eventos.create')->with('actividades', $actividades)->with('distritos', $distritos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'num_evento'=> 'required',
            'institucion'=>'required',
            'distrito'=>'required',
            'actividad_id'=>'required',
            'observacion'=>'required',
            'fecha'=>'required',
        ]);


        //almacenar en la base de datos con modelo
        $evento  = new Evento ($data);
        $evento->save();


        //Redireccionar
        return redirect()->action('EventoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->action('EventoController@index');
    }

    public function exportExcel()
    {
        return Excel::download( new EventosExport,'eventos-list.xlsx' );
    }

    public function datosJson(){

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
        return $eventos->toJson();
    }


}

