@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
        <div class="card-header">Asistentes al evento: {{$evento->actividad->nombre}}</div>




            <div class="card-body">


            <a href="{{ route('asistente.create') }}" class="btn btn-success mb-3"> Agregar Asistente</a>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Genero</th>
                          <th scope="col">Edad</th>
                          <th scope="col">Ocupacion</th>
                          <th scope="col">Accion</th>
                        </tr>
                      </thead>

                      <tbody>
                         @foreach($evento->asistentes as $key => $asistente  )


                          <tr>
                          <td>{{$key + 1}}</td>
                          <td>{{$asistente->nombre}}</td>
                          <td>{{$asistente->genero}}</td>
                            <td>{{$asistente->edad}}</td>
                            <td>{{$asistente->ocupacion}}</td>
                            <td>
                            <form method="POST"  role="form" action="{{ route('asistente.destroy', ['asistente' => $asistente->id])}}">
                                    @csrf
                                    @method('DELETE')
                                  <button class="btn btn-danger text-white" type="submit">Eliminar</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>


</div>
@endsection
