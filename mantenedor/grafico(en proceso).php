<?php
require 'conexion.php';
require 'auth.php';

$fecha_actual = date("Y-m-d");
$patente_vehiculo= $_POST['patente_vehiculo'];

$consulta2 = "SELECT * FROM ingresa WHERE fk_Patente_vehiculo = '$patente_vehiculo'";
$resultado2 =  mysqli_query($conexion, $consulta2);




?>

<div class="col-5 ms-5 mt-4 ">
    <canvas id="myChart" width="400" height="400"></canvas>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Hace 1 dia', 'Hace 2 dias', 'Hace 3 dias', 'Hace 4 dias', 'Hace 5 dias', 'Hace 6 dias', 'Hace 7 dias'],
                datasets: [{
                    label: 'Grafico anual de ingresos',
                    data: [],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
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
    </script>
</div>