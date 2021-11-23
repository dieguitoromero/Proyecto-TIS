
<?php
  include('conexion.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

         <!--icon font-->
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">


    <title>Document</title>
</head>
<body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img style="width: 110px; height:50px;" src="imagenes/logo_horizontal_color_sinfondo.png" alt=""></a>
          
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-end me-5" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
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


    <main class="col-md-9 mx-auto  px-md-4 mt-5"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>

        <?php if(isset($_SESSION['menssage'])){?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <?php $_SESSION['message']?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php session_unset();}?>
            <!-- alerta que no funciona -->

            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <h2>Registro Usuarios</h2>
                </div>
                <div class="col-md-3 mt-1 col-sm-4">
                 
                    <button type="button" class="btn btn-primary active" onclick="location.href = 'registrar_usuario.php'" data-bs-toggle="button" autocomplete="off" aria-pressed="true">Agregar Usuario 
                      <span class="material-icons fs-6 ms-1 align-middle">
                        add_circle
                      </span>
                    </button>

                </div >
            </div>
            <div class="table-responsive mt-5">
            <table class="table table-striped table-sm">
            <thead>
              <tr>

                <th scope="col">Run</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo electronico</th>
                <th scope="col">#</th>

              </tr>
            </thead>
            <tbody>

                <?php
                  #consutal
                  $consulta = "SELECT * FROM `usuario`";
                  # variable conexion y consulta
                  $resultado =  mysqli_query($conexion,$consulta);
            
                  while($row=mysqli_fetch_assoc($resultado)){
                
                ?>
           
                  <tr>
                      <td><?php echo $row['Run_usuario']?></td> 
                      <td><?php echo $row['Nombre_usuario']?></td>
                      <td><?php echo $row['Correo_electronico']?></td>                
                      <td>
                            <a href="editar_usuario.php?Run_usuario=<?php echo $row['Run_usuario']?>">
                                <span class="material-icons text-dark fs-4 ">
                                     edit
                                </span>
                            </a>
                        
                            
                            <a href="eliminar_usuario.php?Run_usuario=<?php echo $row['Run_usuario']?>">
                            <span class="material-icons text-dark fs-4">
                                delete
                            </span> 
                            </a>
                        
                      </td>
                  </tr>
                
           
                <?php } ?>
            </tbody>
          </table>
        </div>
      </main>
 


</body>
</html>