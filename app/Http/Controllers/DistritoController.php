<?php

namespace App\Http\Controllers;

use App\Distrito;
use Illuminate\Http\Request;

class DistritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distritos = Distrito::paginate(10);
        return view('distritos.index')->with('distritos', $distritos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distritos.create');
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
            'clave_distrito' => ['required', 'string'],
            'clave' => ['required', 'string'],
            'nombre' => ['required', 'string'],
        ]);

        Distrito::create([
            'clave_distrito' => $data['clave_distrito'],
            'clave' => $data['clave'],
            'nombre' => $data['nombre'],
        ]);

        //Redireccionar
        return redirect()->action('DistritoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function show(Distrito $distrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Distrito $distrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distrito $distrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distrito $distrito)
    {
        $distrito->delete();
        return redirect()->action('DistritoController@index');
    }
}
