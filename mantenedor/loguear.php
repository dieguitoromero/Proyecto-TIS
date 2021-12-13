<?php 
session_start();
require('conexion/conexion.php');

$run_usu = $_POST['run'];
$run_clave = $_POST['contraseña'];

$query = "SELECT COUNT(*) as contar, Administrador as adm from usuario where Run_usuario = '$run_usu' and Contraseña = '$run_clave'";
$consulta = mysqli_query($conexion,$query);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0 && $array['adm'] == 1 ){

    $_SESSION['user'] = $run_usu;
    $_SESSION['adm'] = $array['adm'];
    header('location: admin/index2.php');


}

if($array['contar']>0 && $array['adm'] == 0 ){

    $_SESSION['user'] = $run_usu;
    header('location: usuario/index2.php');


}

else {

echo ("Cuenta no valida");

}


?>