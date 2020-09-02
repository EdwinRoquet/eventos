
  document.querySelector('#eventos').addEventListener('change', obtenerGrafica);

  function obtenerGrafica(){
   let id = document.getElementById('eventos').value


   fetch(`/home/${id}`).then(function(respuesta) {
    return respuesta.json();
  })
  .then(function(myJson) {
    // console.log(myJson.respuesta);
    Highcharts.chart('grafica', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            `Evento: ${myJson.respuesta.nombre}`,

        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Numero de asistentes(n)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Niñas',
        data: [parseInt(myJson.respuesta.niñas)]

    }, {
        name: 'Niños',
        data: [parseInt(myJson.respuesta.niños)]

    },{
    name:'Total',
    data:[myJson.respuesta.total]
    }
    ]
});



  });

  }
