@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-header">Eventos</div>




            <div class="card-body">

            <a href="{{ route('evento.create') }}" class="btn btn-secondary mb-3"> Agregar Evento</a>

            <a class="btn btn-success text-white mb-3" href="{{ route('evento.excel') }}">Descargar Excel</a>
            <button class="btn btn-outline-info mb-3">Total:{{$totalRegistro}}</button>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Num Evento</th>
                          <th scope="col">Actividad</th>
                          <th scope="col">Distrito</th>
                          <th scope="col">Institución</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Genero</th>
                          <th scope="col">Edad</th>
                          <th scope="col">Ocupacion</th>
                          <th scope="col">Observacion</th>
                          <th scope="col">Fecha del evento</th>
                          <th scope="col">Fecha de Creación</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($eventos as $index  => $evento)
                          <tr>
                          <td>{{$index+1}}</td>
                          <td>{{$evento->num_evento}}</td>
                          <td>{{$evento->actividad->nombre}}</td>
                            <td>{{$evento->distrito}}</td>
                            <td>{{$evento->institucion}}</td>
                            <td>{{$evento->autor->name}}</td>
                            <td>{{$evento->genero}}</td>
                            <td>{{$evento->edad}}</td>
                            <td>{{$evento->ocupacion}}</td>
                            <td>{{$evento->observacion}}</td>
                            <td>{{$evento->fecha}}</td>
                            <td>{{$evento->created_at}}</td>
                            <td>
                                <form method="POST"  role="form" action="{{ route('evento.destroy' , $evento) }}" >
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
                     {{-- {{$distritos->links()}} --}}
            </div>
        </div>
    </div>


</div>
@endsection
