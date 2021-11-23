<?php

    require("conexion.php");
     
    $patente = $_POST["patente"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $tipo = $_POST["tipo_vehiculo"];
    $descrip = $_POST["desarrollo"];
    $run = $_POST["run"];

    $sql = "INSERT INTO `vehiculo`(`Patente_vehiculo`, `Marca_vehiculo`, `Modelo_vehiculo`, `tipo_vehiculo`, `Descripcion`, `fk_run_usuario`) VALUES ('$patente','$marca','$modelo','$tipo','$descrip','$run')";
    $resultado = mysqli_query($conexion,$sql);

    if(!$resultado){
        die("ocurrio un error en el registro");
    }

    echo "guardado";
    header('location: registros_vehiculos.php');

?>