<?php

require("conexion/auth.php");
require("conexion/conexion.php");
$R = $_GET['Run_usuario'];


if (isset($_GET['Run_usuario'])) {

  $query = "SELECT * FROM `usuario` WHERE Run_usuario = '$R'";
  $resultado = mysqli_query($conexion, $query);

  if (mysqli_num_rows($resultado) == 1) {

    $row = mysqli_fetch_array($resultado);
    $Nom = $row['Nombre_usuario'];
    $CE = $row['Correo_electronico'];
  }
}

if (isset($_POST['update'])) {

  $runold = $_GET['Run_usuario'];
  $run = $_POST['run'];
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];

  if ($run != '' && $nombre != '' && $correo != '') {

    $query  = "UPDATE `usuario` SET Run_usuario = '$run', Nombre_usuario = '$nombre', Correo_electronico = '$correo' WHERE Run_usuario = '$runold'";
    mysqli_query($conexion, $query);

    header("Location:admin/registros_usuarios.php");
  } else {

    echo "rellene todo los datos";
  }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Document</title>
</head>

<body>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img style=" height:50px;" src="imagenes/logo_horizontal_color_sinfondo.png" alt=""></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-end me-5" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Vehiculo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Usuarios</a>
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
            <h2>Editar Usuario</h2>

            <form action="editar_usuario.php?Run_usuario=<?php echo $_GET['Run_usuario'] ?>" method="POST">
              <div class="form-group">
                <input type="text" name='run' value="<?php echo $R; ?>" class="form-control mb-3" placeholder="Run usuario">
              </div>

              <div class="form-group">
                <input type="text" name='nombre' value="<?php echo $Nom; ?>" class="form-control mb-3" placeholder="Nombre completo">
              </div>

              <div class="form-group">
                <input type="email" name='correo' value="<?php echo $CE ?>" class="form-control mb-3" placeholder="Correo Electronico">
              </div>

              <div class="form-group">
                <input type="text" name='tipo_usuario' value="<?php echo $CE ?>" class="form-control mb-3" placeholder="Tipo Usuario">
              </div>
              <div class="class text-center">
              <button class="btn btn-danger mt-2" name="update">
                Guardar Cambios
              </button>
              </div>
            </form>

          </div>
        </div>
      </div>


    </div>

  </section>

</body>

</html>