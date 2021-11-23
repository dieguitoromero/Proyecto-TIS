<?php

    require("conexion.php");
     
    $r = $_POST["run"];
    $n = $_POST["nombre"];
    $mail = $_POST["correo"];

    $sql = "INSERT INTO `usuario`(`Run_usuario`, `Nombre_usuario`, `Correo_electronico`) VALUES ('$r','$n','$mail')";
    $resultado = mysqli_query($conexion,$sql);

    if(!$resultado){

        die("ocurrio un error en el registro");

    }

    echo "guardado";
    
    header('location: Registros_usuarios.php');

?>