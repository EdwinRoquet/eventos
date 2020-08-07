@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-header">Usuarios</div>




            <div class="card-body">

            <a href="{{ route('usuario.create') }}" class="btn btn-success mb-3"> Agregar Usuario</a>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Nombre</th>
                          <th scope="col">Correo</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($usuarios as $usuario)
                          <tr>
                          <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>
                                <form method="POST"  role="form" action="{{ route('usuario.destroy' , $usuario) }}" >
                                    {{-- <form  method="POST" action="{{ url('/usuario/borrar/'.$usuario)}}"> --}}
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
        </div>
    </div>


</div>
@endsection
