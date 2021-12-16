<?php
    include("../conexion/conexion.php");

    $consulta = "SELECT de.nombre_departamento, (COUNT(esta.id_estacionamiento)/(SELECT COUNT(*) FROM dispone))*100 as Promedio 
                from departamento de LEFT JOIN dispone dis ON (de.id_departamento = dis.fk_id_departamento) 
                LEFT JOIN estacionamiento esta ON esta.id_estacionamiento = dis.fk_id_estacionamiento 
                 WHERE esta.estado = 0 
                 GROUP BY de.nombre_departamento";
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