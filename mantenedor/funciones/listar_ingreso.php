<?php
    include("../conexion.php");

    $consulta = "SELECT id_registro, fk_Patente_vehiculo, fecha, hora_entrada, hora_salida, fk_id_estacionamiento
                FROM usuario U RIGHT JOIN vehiculo ve ON (U.Run_usuario = ve.fk_Run_usuario) 
                RIGHT JOIN ingresa ON (ve.Patente_vehiculo = ingresa.fk_Patente_vehiculo) 
                RIGHT JOIN registro ON (ingresa.fk_id_registro = registro.id_registro)";
                # variable conexion y consulta
                $resultado =  mysqli_query($conexion, $consulta);
                if(!$resultado){

                die("Error");
                }
                else{
                    while ($row = mysqli_fetch_assoc($resultado)) {
                        $arreglo["data"][] = $row;
                       
                    
                    
                    }
       
                    echo json_encode($arreglo);
                }
              

?>