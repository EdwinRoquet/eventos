@extends('layouts.panel')

@section('content')
<div class="row d-flex justify-content-center ">
    <div class="col-md-6 mb-4">
        <div class="card shadow">
            <div class="card-header">Agregar Usuario</div>
            <div class="card-body">

            <a href="{{route('usuario.index')}}" class="btn btn-success mb-3"> Regresar </a>
              <div class="col-md-12">
                <form role="form" method="POST" action="{{ route('usuario.store') }}">
                    @csrf

                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                        </div>
                        <input class="form-control" placeholder="Nombre" type="text" name="name" value="{{ old('name') }}" required autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Contraseña" type="password" name="password" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Confirmar contraseña" type="password" name="password_confirmation" required>
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
