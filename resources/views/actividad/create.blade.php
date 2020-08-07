@extends('layouts.panel')

@section('content')
<div class="row d-flex justify-content-center ">
    <div class="col-md-6 mb-4">
        <div class="card shadow">
            <div class="card-header">Agregar Distrito</div>
            <div class="card-body">

            <a href="{{route('actividad.index')}}" class="btn btn-success mb-3"> Regresar </a>
              <div class="col-md-12">
                <form role="form" method="POST" action="{{ route('actividad.store') }}">
                    @csrf


                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                        </div>
                        <input class="form-control" placeholder="Nombre de la Actividad" type="text" name="nombre" value="{{ old('nombre') }}" required>
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
