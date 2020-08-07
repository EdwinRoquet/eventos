@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-header">Distritos</div>




            <div class="card-body">

            <a href="{{ route('distritos.create') }}" class="btn btn-success mb-3"> Agregar Distrito</a>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Clave Distrito</th>
                          <th scope="col">Clave</th>
                          <th scope="col">Municipio</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($distritos as $index  => $distrito)
                          <tr>
                          <td>{{$index+1}}</td>
                          <td>{{$distrito->clave_distrito}}</td>
                            <td>{{$distrito->clave}}</td>
                            <td>{{$distrito->nombre}}</td>
                            <td>
                                <form method="POST"  role="form" action="{{ route('distritos.destroy' , $distrito) }}" >
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
                     {{$distritos->links()}}
            </div>
        </div>
    </div>


</div>
@endsection
