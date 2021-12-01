<?php 
session_start();
require('conexion.php');

$run_usu = $_POST['run'];
$run_clave = $_POST['contraseña'];

$query = "SELECT COUNT(*) as contar, Administrador as adm from usuario where Run_usuario = '$run_usu' and Contraseña = '$run_clave'";
$consulta = mysqli_query($conexion,$query);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0 && $array['adm'] == 1 ){

    $_SESSION['user'] = $run_usu;
    header('location: index2.php');


}
if($array['contar']>0){

echo ("La interfaz de usuarios aun no esta terminada");

}

else {

echo ("Cuenta no valida");

}


?>