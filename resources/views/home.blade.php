@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
            {{-- <div class="card-header">Dashboard</div> --}}

            <div class="card-body d-flex justify-content-center">

                <div class="col-xl-12">
                    <div class="card shadow">
                      <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                          <div class="col">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Grafica de Hombre y Mujer por Evento</h6>
                            <h2 class="mb-0">Total Eventos</h2>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <figure class="highcharts-figure">
                            <div id="container"></div>
                            <p class="highcharts-description">
                              .
                            </p>

                            <table class="table align-items-center table-flush" id="datatable">
                              <thead class="thead-light">
                                <tr>
                                  <th>Actividades</th>
                                  <th>Masculino</th>
                                  <th>Femenino</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($eventos as $key => $item)
                                <tr>
                                  <td>{{$key}} </td>
                                  <td>{{$item['Masculino']}} </td>
                                  <td>{{$item['Femenino'] }} </td>
                               </tr>

                                @endforeach

                              </tbody>
                            </table>
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
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>



<script src="{{ asset('js/grafica.js')}}"></script>
@endsection
@endsection
