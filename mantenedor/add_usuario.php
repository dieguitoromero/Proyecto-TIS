<?php

    require("conexion.php");
     
    $run = $_POST["run"];
    $nombre = $_POST["nombre"];
    $mail = $_POST["correo"];

    $sql = "INSERT INTO `usuario`(`Run_usuario`, `Nombre_usuario`, `Correo_electronico`) VALUES ('$run','$nombre','$mail')";
    $resultado = mysqli_query($conexion,$sql);

    if(!$resultado){

        die("ocurrio un error en el registro");

    }

    echo "guardado";
    
    header('location: Registros_usuarios.php');
