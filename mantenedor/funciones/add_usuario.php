<?php

require("../conexion/conexion.php");

$run = $_POST["run"];
$nombre = $_POST["nombre"];
$mail = $_POST["correo"];
$tipo_usuario = $_POST["tipo_usuario"];
$contraseña = $_POST["contraseña"];


if ($tipo_usuario == "carrier") {
    $sqlcarrier = "INSERT INTO `carrir`(`Run_usuario`) VALUES ('$run')";
    $carrier = mysqli_query($conexion, $sqlcarrier);
} else if ($tipo_usuario == "estudiante") {
    $facultad = $_POST["facultad"];
    $sqlestudiante = "INSERT INTO `estudiante`(`Run_usuario`, `fk_id_carrera`) VALUES ('$run','$facultad')";
    $estudiante = mysqli_query($conexion, $sqlestudiante);
} else if ($tipo_usuario == "funcionario") {
    $departamento = $_POST["departamento"];
    $sqlestudiante = "INSERT INTO `personal`(`Run_usuario`, `fk_id_departamento`) VALUES ('$run','$departamento')";
    $estudiante = mysqli_query($conexion, $sqlestudiante);
}

$sql =  "INSERT INTO `usuario`(`Run_usuario`, `Nombre_usuario`, `Correo_electronico`, `tipo_usuario`, `Contraseña`) VALUES ('$run','$nombre','$correo','$tipo_usuario','".md5($contraseña)."')";
$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {

    die("ocurrio un error en el registro");
}

echo "guardado";

header('location: ../index.php');
