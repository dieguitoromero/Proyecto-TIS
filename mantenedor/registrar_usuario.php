<?php
require "conexion.php";
session_start();
$run = $_SESSION['user'];
if ($run == null || $run == '') {
  echo "Usted no tiene autorización";
  die();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Registro usuario</title>
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

  <section class="container px-4 py-5 my-5" id="featured-3">

    <div class="container p-4">


      <div class="row">
        <div class="col-md-4 mx-auto">
          <div class="card card-body text-center">

            <h2 class="mb-5">Registrar</h2>
            <form action="add_usuario.php" method="POST">

              <div class="form-group mb-2">
                <input type="text" name='run' value="" class="form-control" placeholder="Run usuario">
              </div>

              <div class="form-group mb-2">
                <input type="text" name='nombre' value="" class="form-control" placeholder="Nombre completo">
              </div>

              <div class="form-group mb-2">
                <input type="email" name='correo' value="" class="form-control" placeholder="Correo electronico">
              </div>
              <button class="btn btn-danger col-12" type='submit'>
                Registar
              </button>
            </form>

          </div>
        </div>
      </div>


    </div>

  </section>

</body>

</html>