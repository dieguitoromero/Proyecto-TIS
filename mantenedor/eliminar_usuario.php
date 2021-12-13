<?php
require("conexion/auth.php");

if (isset($_GET['Run_usuario'])) {

    $run = $_GET["Run_usuario"];
    $query = "DELETE FROM `usuario` WHERE Run_usuario = '$run'";
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die('Query failed');
    }


    header('location: Registros_usuarios.php');
}
