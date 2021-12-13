<?php
require "../conexion/auth.php";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte-equipos.xls");
?>

<table border="1" ">
    <caption> <h1 >Reporte de equipos </h1></caption>
    <th>ID Registro</th>
    <th>Patente Vehiculo</th>
    <th>Fecha</th>
    <th>Hora Ingreso</th>
    <th>Hora Salida</th>
    <th>ID estacionamiento</th>
    


<?php 

$consulta = "SELECT id_registro, fk_Patente_vehiculo, fecha, hora_entrada, hora_salida, fk_id_estacionamiento
FROM usuario U RIGHT JOIN vehiculo ve ON (U.Run_usuario = ve.fk_Run_usuario) 
RIGHT JOIN ingresa ON (ve.Patente_vehiculo = ingresa.fk_Patente_vehiculo) 
RIGHT JOIN registro ON (ingresa.fk_id_registro = registro.id_registro)";
$resultado = mysqli_query($conexion, $consulta);

while ($row = $resultado->fetch_assoc()) {
?>

        <tr>
            <td><?php echo utf8_decode($row["id_registro"]); ?></td>
            <td><?php echo utf8_decode($row["fk_Patente_vehiculo"]); ?></td>
            <td><?php echo utf8_decode($row["fecha"]); ?></td>
            <td><?php echo utf8_decode($row["hora_entrada"]); ?></td>
            <td><?php echo utf8_decode($row["hora_salida"]); ?></td>
            <td><?php echo utf8_decode($row["fk_id_estacionamiento"]); ?></td>
            
        </tr>
        <?php
    }
    mysqli_free_result($resultado); ?>

</table>