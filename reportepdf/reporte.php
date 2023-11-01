<?php

require('./fpdf/fpdf.php');
require('./../config.php');
$sql = "SELECT * FROM usuarios";
$resultado = $con->query($sql);

$my_pdf = new FPDF();
$my_pdf->AddPage('P', 'letter', 0);
$my_pdf->SetFont('Arial', 'B', 14);
$my_pdf->Cell(50, 15, 'Hello Usco!', 1, 1, 'C');

if ($resultado->num_rows > 0) {
    $my_pdf->Cell(30, 10, 'ID', 1);
    $my_pdf->Cell(60, 10, 'Nombre', 1);
    $my_pdf->Cell(60, 10, 'Correo Electrónico', 1);
    $my_pdf->Cell(60, 10, 'Rol', 1);
    $my_pdf->Ln();

    while ($fila = $resultado->fetch_assoc()) {
        $my_pdf->Cell(30, 10, $fila['id'], 1);
        $my_pdf->Cell(60, 10, $fila['nombre'], 1);
        $my_pdf->Cell(60, 10, $fila['correo'], 1);
        $my_pdf->Cell(60, 10, $fila['rol'], 1);
        $my_pdf->Ln();
    }
} else {
    $my_pdf->Cell(0, 10, 'No hay datos disponibles', 1, 1, 'C');
}

$my_pdf->Output('I', 'salida_pdf.pdf');
