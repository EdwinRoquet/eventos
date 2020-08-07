@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-header">Actividades</div>




            <div class="card-body">

            <a href="{{ route('actividad.create') }}" class="btn btn-success mb-3"> Agregar Actividad</a>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nombre de la Actividad</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($actividades as $index  => $actividad)
                          <tr>
                          <td>{{$index+1}}</td>
                            <td>{{$actividad->nombre}}</td>
                            <td>
                                <form method="POST"  role="form" action="{{ route('actividad.destroy' , $actividad) }}" >
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
                     {{$actividades->links()}}
            </div>
        </div>
    </div>


</div>
@endsection
