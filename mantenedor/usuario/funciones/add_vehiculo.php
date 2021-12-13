<?php

require("../../conexion/auth.php");

$patente = $_POST["patente"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$tipo = $_POST["tipo_vehiculo"];
$descrip = $_POST["desarrollo"];

$sql = "INSERT INTO `vehiculo`(`Patente_vehiculo`, `Marca_vehiculo`, `Modelo_vehiculo`, `tipo_vehiculo`, `Descripcion`, `fk_run_usuario`) VALUES ('$patente','$marca','$modelo','$tipo','$descrip','$run')";
$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {
    die("Ocurrio un error en el registro, el run usuario no se encuentra registrado");
}

echo "Guardado";
header('location: ../miregistros_vehiculos.php');
