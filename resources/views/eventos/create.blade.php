@extends('layouts.panel')

@section('content')
<div class="row d-flex justify-content-center ">
    <div class="col-md-6 mb-4">
        <div class="card shadow">
            <div class="card-header">Agregar Evento</div>
            <div class="card-body">

            <a href="{{route('evento.index')}}" class="btn btn-success mb-3"> Regresar </a>
              <div class="col-md-12">
                <form role="form" method="POST" action="{{ route('evento.store') }}">
                    @csrf
                    <hr class=" border border-primary mt-2 mb-2">
                    <legend class="text-center">Datos Evento</legend>
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                        </div>
                        <input class="form-control" placeholder="Numero de Evento" type="number" name="num_evento" value="{{ old('num_evento') }}" required autofocus>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="actividad_id">Actividad</label>
                         <select name="actividad_id"
                                 class="form-control @error('actividad') is-invalid @enderror"
                                 id="actividad_id">
                                 <option value=""> --Seleccione-- </option>
                                 @foreach ($actividades as  $actividad)
                    <option value="{{$actividad->id}}" {{old('actividad_id') == $actividad->id ? 'selected' : ''}}>{{$actividad->nombre}}</option>
                                 @endforeach
                         </select>
                         @error('actividad')
                         <span class="invalid-feedback d-block" role="alert">
                         <strong>{{$message}}</strong>
                         </span>
                         @enderror

                    </div>

                    <div class="form-group">
                        <label for="distrito">Municipio</label>
                         <select name="distrito"
                                 class="form-control @error('distrito') is-invalid @enderror"
                                 id="distrito">
                                 <option value=""> --Seleccione-- </option>
                                 @foreach ($distritos as  $distrito)
                    <option value="{{$distrito->nombre}}" {{old('distrito') == $distrito->nombre ? 'selected' : ''}}>{{$distrito->nombre}}</option>
                                 @endforeach
                         </select>
                         @error('distrito')
                         <span class="invalid-feedback d-block" role="alert">
                         <strong>{{$message}}</strong>
                         </span>
                         @enderror

                    </div>

                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                        </div>
                        <input class="form-control" placeholder="Institución" type="text" name="institucion" value="{{ old('institucion') }}" required>
                      </div>
                    </div>
                      <div class="form-group">
                        <label for="fecha">Total niñas</label>
                        <div class="input-group input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                          </div>
                          <input class="form-control" placeholder="Niñas total que llegaron" type="number" name="femenino" value="{{ old('femenino') }}" required autofocus>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="fecha">Total niños</label>
                        <div class="input-group input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                          </div>
                          <input class="form-control" placeholder="Niños total que llegaron" type="number" name="masculino" value="{{ old('masculino') }}" required autofocus>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="fecha">Fecha del evento</label>
                        <div class="input-group input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                          </div>
                          <input class="form-control" placeholder="Fecha del Evento" type="date" name="fecha" value="{{ old('fecha') }}" required autofocus>
                        </div>
                      </div>
                      <legend class="text-center">Datos Usuario</legend>
                      <div class="form-group">
                        <label for="nombre">Nombres del usuario: </label>
                        <div class="input-group input-group-alternative mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                          </div>
                          <input class="form-control" placeholder="Fecha del Evento" type="text" name="nombre" value="{{ old('nombre') }}" required autofocus>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="observacion">Obersvaciones</label>
                      <textarea name="observacion"class="form-control" cols="30" rows="10">{{old('observacion')}}</textarea>
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
