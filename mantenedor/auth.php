<?php
require "conexion.php";

session_start();
$run = $_SESSION['user'];
if ($run == null || $run == '') {
  echo "Usted no tiene autorización";
  die();
}
else {
  $consulta = "SELECT * FROM `usuario` WHERE Run_usuario = '$run'";
  # variable conexion y consulta
  $resultado =  mysqli_query($conexion, $consulta);
  $row = mysqli_fetch_assoc($resultado);
  }

?>