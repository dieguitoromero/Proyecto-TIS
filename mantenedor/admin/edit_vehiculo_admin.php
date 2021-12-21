<?php

require "../conexion/conexion.php";



if (isset($_GET['Patente_vehiculo'])) {
  $pv = $_GET['Patente_vehiculo'];
  $query = "SELECT * FROM `vehiculo` WHERE Patente_vehiculo = '$pv'";
  $resultado = mysqli_query($conexion, $query);

  if (mysqli_num_rows($resultado) == 1) {

    $row = mysqli_fetch_array($resultado);
    $mv = $row['Marca_vehiculo'];
    $mov = $row['Modelo_vehiculo'];
    $tv = $row['tipo_vehiculo'];
    $des = $row['Descripcion'];
    $run = $row['fk_run_usuario'];
  }

  if (isset($_POST['update'])) {

    $paold = $_GET['Patente_vehiculo'];
    $pa = $_POST['Patente_vehiculo'];
    $m = $_POST['Marca_vehiculo'];
    $mo = $_POST['Modelo_vehiculo'];
    $t = $_POST['tipo_vehiculo'];
    $d = $_POST['descripcion'];
    $r = $_POST['run'];


    $query  = "UPDATE `vehiculo` SET Patente_vehiculo = '$pa', Marca_vehiculo = '$m', modelo_vehiculo = '$mo' , tipo_vehiculo = '$t', descripcion = '$d', fk_run_usuario = '$r'  WHERE Patente_vehiculo = '$paold'";
    mysqli_query($conexion, $query);

    header("Location:registros_vehiculos.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">

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
      <a class="navbar-brand" href="#"><img style=" height:50px;" src="../imagenes/logo_horizontal_color_sinfondo.png" alt=""></a>

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
          <li class="nav-item ms-5">
            <a class="btn btn-danger" href="../salir.php">Cerrar sesion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="container px-4 py-5 my-5" id="featured-3">

    <div class="container p-4">


      <div class="row">
        <div class="col-md-4 mx-auto">
          <div class="card card-body">
            <form action="edit_vehiculo_admin.php?Patente_vehiculo=<?php echo $_GET['Patente_vehiculo']; ?>" method="POST">
              <div class="text-center mt-2 mb-5">
                <h3>Editar datos del vehiculo</h3>
              </div>
              
              <div class="form-group mb-1">
                <input type="text" name='Marca_vehiculo' value="<?php echo $mv; ?>" class="form-control" placeholder="Update marca">
              </div>

              <div class="form-group mb-1">
                <input type="text" name='Modelo_vehiculo' value="<?php echo $mov ?>" class="form-control" placeholder="Update Modelo">
              </div>

              <div class="form-group mb-1">
                <input type="text" name='tipo_vehiculo' value="<?php echo $tv ?>" class="form-control" placeholder="Update Modelo">
              </div>

              <div class="form-group mb-1">
                <textarea name="descripcion" class="form-control" rows="2" placeholder="actualizar descripcion"></textarea>
              </div>
              <div class="text-center">
                <button class="btn btn-danger" name="update">
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