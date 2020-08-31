<?php

namespace App\Http\Controllers;

use App\Asistente;
use App\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class AsistenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
           // dd(  $request->route('id'));
           $id_evento = $request->route('id');

           //Obtener los candidatos y la vacante
           $evento = Evento::findOrFail( $id_evento);

        return view('asistentes.index' , compact('evento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventos = Evento::all();

        return view('asistentes.create', compact('eventos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
              'nombre'=> 'required',
              'genero'=> 'required',
              'edad'=> 'required',
              'ocupacion'=> 'required',
              'evento_id'=> 'required',
        ]);

        $asistente = new Asistente( $data );
        $asistente->save();

        return redirect()->action('EventoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asistente  $asistente
     * @return \Illuminate\Http\Response
     */
    public function show(Asistente $asistente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asistente  $asistente
     * @return \Illuminate\Http\Response
     */
    public function edit(Asistente $asistente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asistente  $asistente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistente $asistente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asistente  $asistente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistente $asistente)
    {
        $asistente->delete();

        return redirect()->action('EventoController@index');
    }
}
