<?php
require 'conexion.php';
require 'auth.php';

$consulta2 = "SELECT * FROM registro";
$resultado2 =  mysqli_query($conexion, $consulta2);
$data = array();
while ($row2 = mysqli_fetch_assoc($resultado)) {
    $data[] = $row2['fecha_ingreso'];
}

/*
                if ($row2['fecha'] >= '2021-01-1' and $row2['fecha'] < '2021-02-1') {
                    $enero += 1;
                }
                if ($row2['fecha'] >= '2021-02-1' and $row2['fecha'] < '2021-03-1') {
                    $febrero +=  1;
                }
                if ($row2['fecha'] >= '2021-03-1' and $row2['fecha'] < '2021-04-1') {
                    $marzo += 1;
                }
                if ($row2['fecha'] >= '2021-04-1' and $row2['fecha'] < '2021-05-1') {
                    $abril += 1;
                }
                if ($row2['fecha'] >= '2021-05-1' and $row2['fecha'] < '2021-06-1') {
                    $mayo += 1;
                }
                if ($row2['fecha'] >= '2021-06-1' and $row2['fecha'] < '2021-07-1') {
                    $Junio += 1;
                }
                if ($row2['fecha'] >= '2021-07-1' and $row2['fecha'] < '2021-08-1') {
                    $Julio += 1;
                }
                if ($row2['fecha'] >= '2021-08-1' and $row2['fecha'] < '2021-09-1') {
                    $Agosto += 1;
                }
                if ($row2['fecha'] >= '2021-09-1' and $row2['fecha'] < '2021-10-1') {
                    $Septiembre += 1;
                }
                if ($row2['fecha'] >= '2021-10-1' and $row2['fecha'] < '2021-11-1') {
                    $octubre += 1;
                }
                if ($row2['fecha'] >= '2021-11-1' and $row2['fecha'] < '2021-12-1') {
                    $noviembre += 1;
                }
                if ($row2['fecha'] >= '2021-12-1' and $row2['fecha'] < '2022-01-1') {
                    $diciembre += 1;
                }
            }
*/
?>
<div class="col-5 ms-5 mt-4 ">
    <canvas id="myChart" width="400" height="400"></canvas>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'octubre', 'Noviembre', 'Diciembre'],
                datasets: [{
                    label: 'Grafico anual de ingresos',
                    data: [<?php foreach ($data as $d) : ?> "<?php echo $d->date_at ?>",
                        <?php endforeach; ?>
                    ],
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