<?php
require "conexion.php";
/*require "auth.php"*/
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Estadisticas Administrador</title>
</head>

<body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index2.php"><img style="height:50px;" src="imagenes/logo_horizontal_color_sinfondo.png" alt=""></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-end me-5" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index2.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="registros_vehiculos.php">Registros vehiculos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Registros_usuarios.php">Registro usuario</a>
                    </li>

                    <li class="nav-item bg-danger border ">
                        <a class="nav-link active" href="salir.php">Cerrar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="contariner-fluid">
        <div class="container-fluid row">
            <div class="table-responsive col-5 mt-5">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>

                            <th scope="col">Run</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo electronico</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $where = "";
                        #consutal

                        if (!empty($_POST)) {
                            $valor = $_POST['buscar'];
                            if (!empty($valor)) {
                                $where = "WHERE Nombre_usuario LIKE '%$valor%'";
                            }
                        }
                        $consulta1 = "SELECT * FROM usuario $where";

                        # variable conexion y consulta1
                        $resultado =  mysqli_query($conexion, $consulta1);

                        while ($row = mysqli_fetch_assoc($resultado)) {

                        ?>

                            <tr>
                                <td><?php echo $row['Run_usuario'] ?></td>
                                <td><?php echo $row['Nombre_usuario'] ?></td>
                                <td><?php echo $row['Correo_electronico'] ?></td>
                                <td>
                                    <a href="grafico.php?patente_vehiculo=<?php echo $row['Run_usuario'] ?>">
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

            $consulta2 = "SELECT * FROM registro";
            $resultado2 =  mysqli_query($conexion, $consulta2);
            
            
            while ($row2 = mysqli_fetch_assoc($resultado2)) {

                if ($row2['fecha'] >= '2021-01-1' && $row2['fecha'] < '2021-02-1') {
                    $enero += 1;
                }else
                if ($row2['fecha'] >= '2021-02-1' && $row2['fecha'] < '2021-03-1') {
                    $febrero +=  1;
                }else
                if ($row2['fecha'] >= '2021-03-1' && $row2['fecha'] < '2021-04-1') {
                    $marzo += 1;
                }else
                if ($row2['fecha'] >= '2021-04-1' && $row2['fecha'] < '2021-05-1') {
                    $abril += 1;
                }else
                if ($row2['fecha'] >= '2021-05-1' && $row2['fecha'] < '2021-06-1') {
                    $mayo += 1;
                }else
                if ($row2['fecha'] >= '2021-06-1' && $row2['fecha'] < '2021-07-1') {
                    $junio += 1;
                }else
                if ($row2['fecha'] >= '2021-07-1' && $row2['fecha'] < '2021-08-1') {
                    $julio += 1;
                }else
                if ($row2['fecha'] >= '2021-08-1' && $row2['fecha'] < '2021-09-1') {
                    $agosto += 1;
                }else
                if ($row2['fecha'] >= '2021-09-1' && $row2['fecha'] < '2021-10-1') {
                    $Septiembre += 1;
                }else
                if ($row2['fecha'] >= '2021-10-1' && $row2['fecha'] < '2021-11-1') {
                    $octubre += 1;
                }else
                if ($row2['fecha'] >= '2021-11-1' && $row2['fecha'] < '2021-12-1') {
                    $noviembre += 1;
                }else
                if ($row2['fecha'] >= '2021-12-1' && $row2['fecha'] < '2022-01-1') {
                    $diciembre += 1;
                }
                
            

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
                                data: [<?php echo $enero ?>],
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
            </div><?php } ?>
        </div>

    </div>

    </div>
    </div>


</body>

</html>

