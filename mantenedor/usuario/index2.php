<?php
require "../auth.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--icon font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- datatables-->
  <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
  <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>


  <title>Inicio</title>
</head>

<body>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index2.html"><img style=" height:50px;" src="imagenes/logo_horizontal_color_sinfondo.png" alt=""></a>
      <div class="navbar justify-content-md-end me-5" id="navbarNav">
        <ul class="navbar-nav ">
         
          <li class="nav-item ms-5 ">
            <a class="btn btn-danger" href="../salir.php">Cerrar sesion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="container px-4 py-5 my-5 " id="featured-3">
    <h1 class="pb-2 border-bottom text-center">Bienvenido <?php echo $row['Nombre_usuario']?></h1><br>
   
    
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-2 mb-5">

      <div class="feature col border-dark ">
        <div class="d-block   bg-gradient col-2 rounded-3" style="height: 50px;">
          <span class="material-icons fs-1 ">
            directions_car
          </span>
        </div>
        <h2>Mis vehiculos</h2>
        <p>Encontraras el registro completo de los vehiculos registrados en la UCSC</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-danger col-9" onclick="location.href = 'miregistros_vehiculos.php'" type="button">Ver</button>
        </div>
      </div>




    </div>
    <h1>ultimos registros</h1>
    <div class="row row-cols-1 row-cols-lg-2 mt-5  justify-content-center">
    
    <table class="table table-striped" id="tabla">
        <thead>
            <tr>
            <th scope="col">Registros</th>
            <th scope="col">Patente vehiculo</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora entrada</th>
            <th scope="col">hora salida</th>
            <th scope="col">Estacionamiento</th>
            </tr>
        </thead>
        <tbody>
            <?php
                ## mostras nustros ultimos ingreso
                $consulta = "SELECT id_registro, fk_Patente_vehiculo, fecha, hora_entrada, hora_salida, fk_id_estacionamiento
                FROM usuario U RIGHT JOIN vehiculo ve ON (U.Run_usuario = ve.fk_Run_usuario) 
                RIGHT JOIN ingresa ON (ve.Patente_vehiculo = ingresa.fk_Patente_vehiculo) 
                RIGHT JOIN registro ON (ingresa.fk_id_registro = registro.id_registro) 
                WHERE u.Run_usuario = $run";
                # variable conexion y consulta
                $resultado =  mysqli_query($conexion, $consulta);
                 
                if(!$resultado){
                echo "<p > estamos presentando error </p>";
                }
                while ($row = mysqli_fetch_assoc($resultado)) {

            ?>

                <tr class="text_center">
                <td><?php echo $row['id_registro'] ?></td>
                <td><?php echo $row['fk_Patente_vehiculo'] ?></td>
                <td><?php echo $row['fecha'] ?></td>
                <td><?php echo $row['hora_entrada'] ?></td>
                <td><?php echo $row['hora_salida'] ?></td>
                <td><?php echo $row['fk_id_estacionamiento'] ?></td>
                </tr>


            <?php } ?>
        </tbody>
    </table>

        

    </div>
  </section>
  
  <script> 
    var tabla = document.querySelector("#tabla");
    var  dataTable = new DataTable(tabla);                  
                
  </script>
            
</body>

</html>