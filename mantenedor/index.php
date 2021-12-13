<?php 

    include('conexion/conexion.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>login</title>
</head>

<body>

    <div class="container w-100 mt-5 rounded shadow ">
        <div class="row align-items-stretch">

            <!--1 Col-->

            <div class="col d-none d-lg-block col-md-5 col-lg-5 col-xl-6 n">
                <div class="my-2 text-center">
                    <img class="img-fluid" src="imagenes/Reservado.jpg" width="250" alt="">
                </div>
                <div id="carouselExampleControls" class="carousel slide mb-3" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="imagenes/login1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="imagenes/login2.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="imagenes/login3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            
            </div>

            <!--2 Col-->

            <!--logo-->
            <div class="col">
                <div class="text-end m-5">
                    <img src="imagenes/logo_horizontal_color_sinfondo.png" width="250" alt="">
                </div>

                <h2 class="text-center fw-bold py-5">Bienvenido</h2>
                
                
                
                <!--Login-->

                <form action="loguear.php" method="POST">
                    <div class="mb-4">
                        <label for="run" class="form-label">Run</label>
                        <input class="form-control" type="texto" name="run">
                    </div>
                    <div class="mb-4">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input class="form-control" type="password" name="contraseña">
                    </div>
                    <div class="mb-4 form-check">
                        <input class="form-check-input" type="checkbox" name="connected">
                        <label class="form-check-label" for="connected">Recordar cuenta</label>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-outline-danger" type="submit" >Iniciar sesión</button>
                    </div>

                    <div class="my-3">
                        <span>No tienes cuenta? <a href="registrar.html">Regístrate</a></span>
                    </div>
                    
                    <div class="my-3">
                        <span>Acceso a <a href="reclamo.php">Reclamo</a></span>
                    </div>
                    
                </form>
        
                <!--Login-->
                  
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>