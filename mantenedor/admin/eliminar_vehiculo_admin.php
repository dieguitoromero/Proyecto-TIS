<?php
require "../conexion/auth.php";
require "../conexion/conexion.php";

if (isset($_GET['Patente_vehiculo'])) {

    $patente_vehicular = $_GET["Patente_vehiculo"];
    $query = "DELETE FROM `vehiculo` WHERE Patente_vehiculo = '$patente_vehicular'";
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die('Query failed ' . $patente_vehicular);
    }

  

    header('location: registros_vehiculos.php');
}


