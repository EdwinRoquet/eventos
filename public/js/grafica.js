// function fetchData(){

//     fetch('http://127.0.0.1:8000/evento/json')
//     .then(function(response){
//         return response.json();
//     })
//     .then(function(myJson) {
//          console.log(myJson);
//     })
// }


// fetchData();

Highcharts.chart('container', {
    data: {
      table: 'datatable'
    },
    chart: {
      type: 'column'
    },
    title: {
      text: 'Grafica de asitencia de eventos por genero'
    },
    yAxis: {
      allowDecimals: false,
      title: {
        text: 'Units'
      }
    },
    tooltip: {
      formatter: function () {
        return '<b>' + this.series.name + '</b><br/>' +
          this.point.y + ' ' + this.point.name.toLowerCase();
      }
    }
  });
