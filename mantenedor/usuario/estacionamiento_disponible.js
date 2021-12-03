$( document ).ready(function() {
    console.log( "ready!" );
    $.ajax({
    type: "GET",
    url: "listar_estacionamiento.php",
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    success: function (data) {
      console.log(data);
      console.log(data.data[1].nombre_departamento);
      const etiqueta = [];
      const valor = [];
      for(var i= 0;i< data.data.length;i++){
        etiqueta.push(data.data[i].nombre_departamento);
        valor.push(data.data[i].Promedio);
      }
      console.log(etiqueta);
      console.log(valor);
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: etiqueta,
          datasets: [{
              label: '# of Votes',
              data: valor,
              backgroundColor: [
                  'rgb(255, 99, 132)',
                  'rgba(255, 159, 64)',
                  'rgb(255, 205, 86)',
                  'rgba(75, 192, 192)',
                  'rgb(54, 162, 235)',
                  
              ],
              borderColor: [
                  'rgb(255, 99, 132)',
                  'rgba(255, 159, 64)',
                  'rgb(255, 205, 86)',
                  'rgba(75, 192, 192)',
                  'rgb(54, 162, 235)',
                  
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
}); 
    },
    failure: function (data) {

    },
    error: function (data) {
    
    }
    });

  
   //cualquier cosa que quieras mostrar al terminar

    });
