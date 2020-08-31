@extends('layouts.panel')

@section('content')
<div class="row d-flex justify-content-center ">
    <div class="col-md-6 mb-4">
        <div class="card shadow">
            <div class="card-header">Agregar Evento</div>
            <div class="card-body">

              <div class="col-md-12">
                <form role="form" method="POST" action="{{ route('asistente.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="genero">Nombre</label>
                    <input class="form-control" type="text" name="nombre" value="{{old('nombre')}}">
                    </div>

                    <div class="form-group">
                        <label for="genero">Genero</label>
                         <select name="genero"
                                 class="form-control @error('genero') is-invalid @enderror"
                                 id="distrito">
                                 <option value=""> --Seleccione-- </option>
                                 <option value="f"> Femenino </option>
                                 <option value="m"> Masculino </option>
                         </select>
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad</label>
                         <select name="edad"
                                 class="form-control @error('edad') is-invalid @enderror"
                                 id="distrito">
                                 <option value=""> --Seleccione-- </option>
                                 <option value="3 a 6 años"> 3 a 6 años </option>
                                 <option value="6 a 12 años"> 6 a 12 años </option>
                                 <option value="12 a 18 años"> 12 a 18 años </option>
                                 <option value="18 a 24 años"> 18 a 24 años </option>
                                 <option value="25 o mas años"> 25 o más años </option>
                         </select>
                    </div>
                    <div class="form-group">
                        <label for="ocupacion">Ocupación</label>
                         <select name="ocupacion"
                                 class="form-control @error('ocupacion') is-invalid @enderror"
                                 id="distrito">
                                 <option value=""> --Seleccione-- </option>
                                 <option value="Estudiantes"> Estudiantes </option>
                                 <option value="Academicos"> Académicos </option>
                                 <option value="Funcionarios"> Funcionarios </option>
                                 <option value="Otros"> Otros </option>
                         </select>
                    </div>
                    <div class="form-group">
                        <label for="ocupacion">Evento al que asiste</label>

                         <select name="evento_id"
                                 class="form-control @error('evento_id') is-invalid @enderror"
                                 id="distrito">
                                 <option value=""> --Seleccione-- </option>
                                 @foreach($eventos as $evento)
                                 <option value="{{$evento->id}}"> {{$evento->actividad->nombre}} </option>
                                 @endforeach


                         </select>
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
