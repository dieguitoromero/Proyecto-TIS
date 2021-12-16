<?php 

require "../../conexion/auth.php";

if(isset($_POST["text"])){


    // recuperamos patente
    $patente = $_POST["text"];
    echo $patente;
    $query = "SELECT * from vehiculo where Patente_vehiculo = $patente";
    $consulta = mysqli_query($conexion,$query);

    if (!isset($consulta)) {
        die("Patente no registrada");
        header('location: ../scanner.php');
    
        }

    else{

        $query = "SELECT COUNT(*)+3 as ingreso from registro;";
        $consulta = mysqli_query($conexion,$query);
        $ROW = mysqli_fetch_array($consulta);
        $registro = $ROW['ingreso'];


        // estacionamiento disponible
        $query = "SELECT id_estacionamiento as id from estacionamiento where estado = 0
        LIMIT 1";
        $consulta = mysqli_query($conexion,$query);
        $ROW = mysqli_fetch_array($consulta);
        $estacionamiento = $ROW['id'];

        // inserto registro primero
        $sql = "INSERT INTO `registro`(`id_registro`, `hora_entrada`, `hora_salida`, `fk_id_estacionamiento`) VALUES ('$registro',NOW(),'','$estacionamiento')";
        $res = mysqli_query($conexion, $sql);

        if(!$res){
            die("ingreso 1 error");
        }
        else{
        
            //ingresa 
        $sql = "INSERT INTO `ingresa`(`fecha`, `fk_id_registro`, `fk_Patente_vehiculo`) VALUES (NOW(),'$registro','$patente')";
        $resultado = mysqli_query($conexion, $sql);
        header("../index2.php");
        }
        
        }
} 




?>