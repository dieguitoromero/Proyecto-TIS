<?php
require "../conexion/auth.php";
require "../conexion/conexion.php";  
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
      <a class="navbar-brand" href="adm/index2.html"><img style=" height:50px;" src="../imagenes/logo_horizontal_color_sinfondo.png" alt=""></a>
      <div class="navbar justify-content-md-end me-5" id="navbarNav">
        <ul class="navbar-nav ">

          <li class="nav-item ms-5 ">
            <a class="btn btn-danger" href="../salir.php">Cerrar sesion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="container " id="featured-3">
    <h1 class="pb-2 border-bottom text-center">Administrador</h1><br>
    <p class="text-center fs-5">Bienvenido <?php echo $row['Nombre_usuario'] ?></p>

    <div class="row ">

      <div class="feature col-lg-4 col-md-6 col-s-12 mt-5 border-dark">
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

      <div class="feature col-lg-4 col-md-6 col-s-12 mt-5 border-dark">
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

      <div class="feature col-lg-4 col-md-6 col-s-12 mt-5 border-dark">
        <div class="d-block   bg-gradient col-2 rounded-3" style="height: 50px;">
          <span class="material-icons fs-1">
            remove_red_eye
          </span>
        </div>
        <h2>Registro ingreso</h2>
        <p>Encontraras el registro completo de los ingresos registrados en la UCSC</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-danger col-9" onclick="location.href = 'registros_ingreso.php'" type="button">Ver</button>
        </div>
        </div>

        <div class="feature col-lg-4 col-md-6 col-s-12 mt-5 border-dark">
          <div class="d-block   bg-gradient col-2 rounded-3" style="height: 50px;">
            <span class="material-icons fs-1 ">
              bar_chart
            </span>
          </div>
          <h2>Visualizar Estadisticas</h2>
          <p>Encontraras el registro estadistico completo de entrada y salidas</p>
          <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-danger col-9" onclick="location.href = 'estadisticas.php'" type="button">Ver</button>
          </div>
        </div>
        <div class="feature col-lg-4 col-md-6 col-s-12 mt-5 border-dark">
          <div class="d-block   bg-gradient col-2 rounded-3" style="height: 50px;">
            <span class="material-icons fs-1 ">
            qr_code_scanner
            </span>
          </div>
          <h2>Scaner de ingreso</h2>
          <p>Encontraras el escaner que registra la entrada</p><br>
          <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-danger col-9" onclick="location.href = 'scanner_inicio.php'" type="button">Ver</button>
          </div>
        </div>
        <div class="feature col-lg-4 col-md-6 col-s-12 mt-5 border-dark">
          <div class="d-block   bg-gradient col-2 rounded-3" style="height: 50px;">
            <span class="material-icons fs-1 ">
            qr_code_scanner
            </span>
          </div>
          <h2>Scaner de salida</h2>
          <p>Encontraras el escaner que registra la salida</p><br>
          <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-danger col-9" onclick="location.href = 'scanner_salida.php'" type="button">Ver</button>
          </div>
        </div>


      </div>
  </section>

</body>

</html>