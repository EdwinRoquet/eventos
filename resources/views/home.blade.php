@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-header">

                <form action="">
                 <div class="row">
                     <div class="col-md-4">
                        <label for="ocupacion">Evento que desea graficar</label>

                        <select name="evento_id"
                                class="form-control @error('evento_id') is-invalid @enderror"
                                id="eventos">
                                <option value=""> --Seleccione-- </option>
                                @foreach($eventos as $evento)
                                <option value="{{$evento->id}}"> {{$evento->actividad->nombre}} </option>
                                @endforeach


                        </select>

                     </div>

                    </div>

                </form>
            </div>

            <div class="card-body d-flex justify-content-center">

                <div class="col-xl-12">
                    <div class="card shadow">

                      <div class="card-body">
                        <figure class="highcharts-figure">
                            <div id="grafica"></div>
                            <p class="highcharts-description">
                               Seleccione una grafica para mostrar
                            </p>
                          </figure>

                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="{{ asset('js/grafica.js')}}"></script>
@endsection
@endsection
