<?php

require "../conexion/auth.php"
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<!-- datatables-->
<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index2.php"><img style="height:50px;" src="../imagenes/logo_horizontal_color_sinfondo.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-end me-5" id="navbarNav">
                <ul class="navbar-nav ">
                    <nav aria-label="breadcrumb me-5 ">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item mt-2"><a href="index2.php">Administrador</a></li>
                            <li class="breadcrumb-item active mt-2 me-5">Estadisticos</li>
                        </ol>
                    </nav>

                    <li class="nav-item ms-5">
                        <a class="btn btn-danger" href="salir.php">Cerrar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="contariner-fluid">
        <button type="button" class="btn btn-primary active ms-4 mt-5" onclick="location.href = 'reporte_pdf.php'" data-bs-toggle="button" autocomplete="off" aria-pressed="true">Imprimir pdf
            <span class="material-icons">
                picture_as_pdf
            </span>
        </button>
        <button type="button" class="btn btn-success active ms-5 mt-5" onclick="location.href = 'reporte_excel.php'" data-bs-toggle="button" autocomplete="off" aria-pressed="true">Imprimir excel
            <span class="material-icons">
                description
            </span>
        </button><br><br>
        <div class="container-fluid row">
            <div class="table-responsive col-5 mt-5">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>

                            <th scope="col">ID registro</th>
                            <th scope="col">Patente Vehiculo</th>
                            <th scope="col">Fecha de ingreso</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $consulta1 = "SELECT * FROM ingresa";
                        $resultado =  mysqli_query($conexion, $consulta1);

                        while ($row = mysqli_fetch_assoc($resultado)) {

                        ?>

                            <tr>
                                <td><?php echo $row['fk_id_registro'] ?></td>
                                <td><?php echo $row['fk_Patente_vehiculo'] ?></td>
                                <td><?php echo $row['fecha'] ?></td>
                                <td>
                                    <a href="grafico.php?c=<?php echo $row['fk_Patente_vehiculo'] ?>">
                                        <span class="material-icons text-dark fs-4 ms-2">
                                            arrow_circle_right
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <?php

            $consulta2 = "SELECT * FROM ingresa";
            $resultado2 =  mysqli_query($conexion, $consulta2);

            ?>
            <div class="col-5 ms-5 mt-4 ">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
            <script>
                $(document).ready(function() {
                    console.log("ready!");
                    $.ajax({
                        type: "GET",
                        url: "datos_fecha.php",
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        success: function(data) {
                            console.log(data);
                            console.log(data.data[1].total_mes);
                            const etiqueta = [];
                            const valor = [];
                            for (var i = 0; i < data.data.length; i++) {
                                etiqueta.push(data.data[i].Mes);
                                valor.push(data.data[i].total_mes);
                            }
                            console.log(etiqueta);
                            console.log(valor);
                            const ctx = document.getElementById('myChart').getContext('2d');
                            const myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                                    datasets: [{
                                        label: 'Reporte por mes',
                                        data: valor,
                                        backgroundColor: [
                                            'rgba(255, 99, 132)',
                                            'rgba(54, 162, 235)',
                                            'rgba(255, 206, 86)',
                                            'rgba(75, 192, 192)',
                                            'rgba(153, 102, 255)',
                                            'rgba(255, 159, 64)',
                                            'rgba(245, 40, 145)',
                                            'rgba(145, 150, 200)',
                                            'rgba(89, 28, 59)',
                                            'rgba(145, 150, 80)',
                                            'rgba(35, 139, 123)',
                                            'rgba(35, 139, 181)',
                                            
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, )',
                                            'rgba(54, 162, 235, )',
                                            'rgba(255, 206, 86, )',
                                            'rgba(75, 192, 192, )',
                                            'rgba(153, 102, 255, )',
                                            'rgba(255, 159, 64, )'
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
                        failure: function(data) {
                        },
                        error: function(data) {
                        }
                    });
                    //cualquier cosa que quieras mostrar al terminar
                });
            </script>
        </div>
    </div>
    </div>
    </div>


</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.1/chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.1/chart.esm.min.js"></script>