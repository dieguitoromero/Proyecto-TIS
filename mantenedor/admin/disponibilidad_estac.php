<?php
require "../conexion/conexion.php";
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
  

  <script> 

    $(document).ready( function () {
        $('#r_tabla').DataTable({

          'ajax':{

            "method": "POST",
            "url": "funciones/listar_ingreso.php"          
          },

          "columns":[

              {"data":"id_registro"},
              {"data":"fk_Patente_vehiculo"},
              {"data":"fecha"},
              {"data":"hora_entrada"},
              {"data":"hora_salida"},
              {"data":"fk_id_estacionamiento"}

          ]
        
        
        });

      } );
            
</script> 

      

  <title>Registro ingresos</title>
</head>

<body>
 
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index2.php"><img style="height:50px;" src="imagenes/logo_horizontal_color_sinfondo.png" alt=""></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-end me-5" id="navbarNav">
        <ul class="navbar-nav ">
        <nav aria-label="breadcrumb me-5 ">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item mt-2"><a href="index2.php">Administrador</a></li>
              <li class="breadcrumb-item active mt-2">Página actual</li>
            </ol>
          </nav>

          <li class="nav-item ms-5">
            <a class="btn btn-danger" href="salir.php">Cerrar sesion</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>


  <main class="container-fluid ">
    
    <div class="row mx-5 mt-5">
    <h1>Estacionamientos disponible</h1>
      <div class="col-md-6 ms-5 mb-5 me-5">

        <table class="table table-striped" id="tabla">
          <thead>
              <tr>
              <th scope="col">Departamento</th>
              <th scope="col">Disponibles</th>
              </tr>
          </thead>
          <tbody>
              <?php
                  ## mostras nustros ultimos ingreso
                  $consulta = "SELECT de.nombre_departamento, COUNT(esta.id_estacionamiento) as disponible 
                  from departamento de LEFT JOIN dispone dis ON (de.id_departamento = dis.fk_id_departamento) 
                  LEFT JOIN estacionamiento esta ON esta.id_estacionamiento = dis.fk_id_estacionamiento 
                   WHERE esta.estado = 0 
                   GROUP BY de.nombre_departamento";
                  # variable conexion y consulta
                  $resultado =  mysqli_query($conexion, $consulta);
                  
                  if(!$resultado){
                  echo "<p > estamos presentando error </p>";
                  }
                  while ($row = mysqli_fetch_assoc($resultado)) {

              ?>

                  <tr class="text_center">
                  <td><?php echo $row['nombre_departamento'] ?></td>
                  <td><?php echo $row['disponible'] ?></td>
                  </tr>


              <?php } ?>
          </tbody>
        </table>

      </div>

      <div class="col-md-4 me-5">
        <canvas id="myChart" width="400" height="400"></canvas>
      </div >
      <script src="../estacio_disponible.js"></script>

    </div>
  </main>
  <script> 
    var tabla = document.querySelector("#tabla");
    var  dataTable = new DataTable(tabla);                  
                
  </script>
     
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.1/chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.1/chart.esm.min.js"></script>