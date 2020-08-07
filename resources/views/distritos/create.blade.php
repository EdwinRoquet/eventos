@extends('layouts.panel')

@section('content')
<div class="row d-flex justify-content-center ">
    <div class="col-md-6 mb-4">
        <div class="card shadow">
            <div class="card-header">Agregar Distrito</div>
            <div class="card-body">

            <a href="{{route('usuario.index')}}" class="btn btn-success mb-3"> Regresar </a>
              <div class="col-md-12">
                <form role="form" method="POST" action="{{ route('distritos.store') }}">
                    @csrf

                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                        </div>
                        <input class="form-control" placeholder="Clave Distrito" type="text" name="clave_distrito" value="{{ old('clave_distrito') }}" required autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-pin-3"></i></span>
                        </div>
                        <input class="form-control" placeholder="Clave" type="text" name="clave" value="{{ old('clave') }}" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                        </div>
                        <input class="form-control" placeholder="Nombre Municipio" type="text" name="nombre" value="{{ old('Municipio') }}" required>
                      </div>
                    </div>


                    <div class="text-center">
                      <button type="submit" class="btn btn-primary mt-4">Confirmar registro</button>
                    </div>
                  </form>
              </div>

            </div>
        </div>

    </div>
</div>
@endsection
