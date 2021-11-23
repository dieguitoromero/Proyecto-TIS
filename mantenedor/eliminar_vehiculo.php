<?php 
    require("conexion.php");

    if(isset($_GET['Patente_vehiculo'])) {

        $patente_vehicular=$_GET["Patente_vehiculo"];
        $query = "DELETE FROM `vehiculo` WHERE Patente_vehiculo = '$patente_vehicular'";
        $resultado = mysqli_query($conexion,$query);
        
        if (!$resultado){
            die('Query failed'.$patente_vehicular);
        }

        $_SESSION['message'] =  'Registro eliminado con exito';
        $_SESSION['message'] = 'danger';


        header('location: registros_vehiculos.php');
    }

   


?>