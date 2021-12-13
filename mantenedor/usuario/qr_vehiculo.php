
 <?php
 require "../conexion/auth.php"

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

<?php

if (isset($_GET['Patente_vehiculo'])) {

    $patente_vehicular = $_GET["Patente_vehiculo"];
    // $query = "DELETE FROM `vehiculo` WHERE Patente_vehiculo = '$patente_vehicular'";
    // $resultado = mysqli_query($conexion, $query);
	require "phpqrcode/qrlib.php";    
	
	//Declaramos una carpeta temporal para guardar la imagenes generadas
	$dir = 'temp/';
	$contenido = $patente_vehicular; //Texto
	//Si no existe la carpeta la creamos
	if (!file_exists($dir))
		mkdir($dir);
	
		//Declaramos la ruta y nombre del archivo a generar
	$filename = $dir.'test.'.$contenido.'.png';

		//Parametros de Condiguración
	
	$tamaño = 10; //Tamaño de Pixel
	$level = 'H'; //Precisión Baja
	$framSize = 3; //Tamaño en blanco
	
	
		//Enviamos los parametros a la Función para generar código QR 
	QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
		if (!$resultado) {
			die('Query failed' . $patente_vehicular);
		}

   

    // header('location: registros_vehiculos.php');
}

 
 

?>

<section class="container-fluid justify-content-center">
	<div class="row " width = "100px">
		<div class="col-4">
			<?php

				 //Mostramos la imagen generada
			 echo '<img src="'.$dir.basename($filename).'" /><hr/>';  
			
			 echo "<a href=".$filename." download = ".$filename.">descarga</a>"
			?>
		</div>
		<div class="col-4">

		<p>hola</p>

		</div>		

	<div>

		
	
</section>

</body>

</html>