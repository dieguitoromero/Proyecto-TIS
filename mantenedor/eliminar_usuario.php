<?php
require("conexion.php");

if (isset($_GET['Run_usuario'])) {

    $run = $_GET["Run_usuario"];
    $query = "DELETE FROM `usuario` WHERE Run_usuario = '$run'";
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die('Query failed');
    }

    $_SESSION['message'] =  'Registro eliminado con exito';
    $_SESSION['message'] = 'danger';


    header('location: Registros_usuarios.php');
}
