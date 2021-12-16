<?php 

require "../../conexion/auth.php";

if(isset($_POST["text"])){

    $patente = $_POST["text"];  
    // recuperamos ultimo registro de ingreso
    $query = "SELECT MAX(fk_id_registro) as id from ingresa WHERE fk_Patente_vehiculo = '$patente'";
    $consulta = mysqli_query($conexion,$query);
    $ROW = mysqli_fetch_array($consulta);
    $n_registro = $ROW['id'];

    $sql = "UPDATE `registro` SET `hora_salida`= NOW() WHERE id_registro = $n_registro";
    $res = mysqli_query($conexion, $sql);

    if (!isset($consulta)) {
        die("Patente no registrada");
        
        }

    else{
        header('location: ../scanner_salida.php');
    }
} 




?>