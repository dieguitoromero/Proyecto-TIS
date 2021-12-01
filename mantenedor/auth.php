<?php
require "conexion.php";

session_start();
$run = $_SESSION['user'];
if ($run == null || $run == '') {
  echo "Usted no tiene autorización";
  die();
}

?>