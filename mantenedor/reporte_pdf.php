<?php
require('fpdf.php');
require 'conexion.php';

$consulta = "SELECT id_registro, fk_Patente_vehiculo, fecha, hora_entrada, hora_salida, fk_id_estacionamiento
FROM usuario U RIGHT JOIN vehiculo ve ON (U.Run_usuario = ve.fk_Run_usuario) 
RIGHT JOIN ingresa ON (ve.Patente_vehiculo = ingresa.fk_Patente_vehiculo) 
RIGHT JOIN registro ON (ingresa.fk_id_registro = registro.id_registro)";

$resultado = $conexion->query($consulta);

$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AliasNbpages();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(120);
$pdf->Cell(50, 10, 'Reporte Entrada y Salida', 0, 0, 'C');
$pdf->Ln(15);

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetFillColor(55, 200, 78);
$pdf->cell(30, 10, 'ID Registro', 1, 0, 'C', true);
$pdf->SetFillColor(55, 200, 78);
$pdf->cell(90, 10, 'Patente Vehiculo', 1, 0, 'C', true);
$pdf->SetFillColor(55, 200, 78);
$pdf->cell(27, 10, 'Fecha', 1, 0, 'C', true);
$pdf->SetFillColor(55, 200, 78);
$pdf->cell(27, 10, 'Hora de entrada', 1, 0, 'C', true);
$pdf->SetFillColor(55, 200, 78);
$pdf->cell(25, 10, 'Hora de salida', 1, 0, 'C', true);
$pdf->SetFillColor(55, 200, 78);
$pdf->cell(30, 10, 'ID estacionamiento', 1, 0, 'C', true);
$pdf->Ln(10);

while ($row = $resultado->fetch_assoc()) {

    $pdf->SetFont('Arial', '', 8);
    $pdf->cell(30, 10, utf8_decode($row['id_registro']), 1, 0, 'C', 0);
    $pdf->SetFont('Arial', '', 6);
    $pdf->cell(90, 10, utf8_decode($row['fk_Patente_vehiculo']), 1, 0, 'C', 0);
    $pdf->cell(27, 10, utf8_decode($row['fecha']), 1, 0, 'C', 0);
    $pdf->cell(27, 10, utf8_decode($row['hora_entrada']), 1, 0, 'C', 0);
    $pdf->cell(25, 10, utf8_decode($row['hora_salida']), 1, 0, 'C', 0);
    $pdf->cell(30, 10, utf8_decode($row['fk_id_estacionamiento']), 1, 0, 'C', 0);
    $pdf->Ln(10);
}

$pdf->Output();
