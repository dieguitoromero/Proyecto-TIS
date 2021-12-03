<?php
    include("conexion.php");

    $consulta = "SELECT MONTH(Fecha) Mes, COUNT(*) total_mes FROM ingresa GROUP BY Mes DESC";
    

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
