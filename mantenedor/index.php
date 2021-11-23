<?php
require "conexion.php";
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

  <title>Inicio</title>
</head>

<body>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html"><img style="width: 110px; height:40px;" src="imagenes/logo_horizontal_color_sinfondo.png" alt=""></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-end me-5" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="registros_vehiculos.php">Registros vehiculos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Registros_usuarios.php">Registro usuario</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <section class="container px-4 py-5 my-5 " id="featured-3">
    <h1 class="pb-2 border-bottom text-center">Mantenedores</h1><br>

    <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">

      <div class="feature col border-dark">
        <div class="d-block   bg-gradient col-2 rounded-3" style="height: 50px;">
          <span class="material-icons fs-1 ">
            directions_car
          </span>
        </div>
        <h2>Vehiculos</h2>
        <p>Encontraras el registro completo de los vehiculos registrados en la UCSC</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-danger col-9" onclick="location.href = 'registros_vehiculos.php'" type="button">Ver</button>
        </div>
      </div>

      <div class="feature col border-dark">
        <div class="d-block   bg-gradient col-2 rounded-3" style="height: 50px;">
          <span class="material-icons fs-1 ">
            account_circle
          </span>
        </div>
        <h2>Usuarios</h2>
        <p>Encontraras el registro completo de los usuarios registrados en la UCSC</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-danger col-9" onclick="location.href = 'registros_usuarios.php'" type="button">Ver</button>
        </div>
      </div>

      

    </div>
  </section>

</body>

</html>