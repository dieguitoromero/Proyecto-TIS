<?php
require "../conexion/conexion.php";
require "../conexion/auth.php";

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Registro vehiculos</title>
</head>

<body>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


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
                <li class="breadcrumb-item mt-2"><a href="index2.php">Inicio</a></li>
                <li class="breadcrumb-item active mt-2" href="registros_ingreso.php">Registros ingreso</li>
              </ol>
          </nav>

            <li class="nav-item ms-5">
              <a class="btn btn-danger" href="../salir.php">Cerrar sesion</a>
            </li>

        </ul>
      </div>
    </div>
  </nav>


  <main class="col-md-9 mx-auto  px-md-4 mt-5">
    

    <div class="row ms-2">
      <div class="col-md-8 col-sm-8">
        <h2>Registros de vehiculos</h2>
      </div>
      <div class="col-md-6  mt-1 col-sm-4">

        <button type="button" class="btn btn-success active" onclick="location.href = 'registrar_vehiculo.php'" data-bs-toggle="button" autocomplete="off" aria-pressed="true">Agregar Vehiculo
          <span class="material-icons fs-6 ms-1 align-middle">
            add_circle
          </span>
        </button><br><br>
      </div>
    </div>
   <div class="container-fluid row">
    <div class="table-responsive col-9 mt-3">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">Patente</th>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Tipo vehiculo</th>
            <th scope="col">Modificar/ Elimina / Mostrar QR</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $where = "";
          #consutal

          $consulta = "SELECT * FROM vehiculo where fk_Run_usuario = $run";
          # variable conexion y consulta
          $resultado =  mysqli_query($conexion, $consulta);

          while ($row = mysqli_fetch_assoc($resultado)) {
          

          
          ?>

            <tr>
              <td><?php echo $row['Patente_vehiculo'] ?></td>
              <td><?php echo $row['Marca_vehiculo'] ?></td>
              <td><?php echo $row['Modelo_vehiculo'] ?></td>
              <td><?php echo $row['tipo_vehiculo'] ?></td>
              <td>
                <a class="me-4" href="edit_vehiculo.php?Patente_vehiculo=<?php echo $row['Patente_vehiculo'] ?>">
                  <span class="material-icons text-dark fs-4 ms-4">
                    edit
                  </span>
                </a>

                <a class="me-4" href="../eliminar_vehiculo.php?Patente_vehiculo=<?php echo $row['Patente_vehiculo'] ?>">
                  <span class="material-icons text-dark fs-4 ms-4">
                    delete
                  </span>
                </a>

                <a href="qr_vehiculo.php?Patente_vehiculo=<?php echo $row['Patente_vehiculo'] ?>">
                  <span class="material-icons">
                    qr_code_2
                  </span>
                </a>


              </td>
            </tr>


          <?php }?>
        </tbody>
      </table>
    </div>

  </div>
            
    </div>
    </div>
  </main>
  

</body>

</html>