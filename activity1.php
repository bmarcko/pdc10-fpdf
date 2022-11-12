<?php

include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new Fpdf();
$pdf->AddPage();
$pdf->SetFont('Courier', 'B', 18);
$pdf->Cell(10, 10 ,'Bobby Marcko L. Cruz', 0, 1);
$pdf->Cell(10, 10, 'CCS', 0, 1);
$pdf->Cell(10, 10, 'cruz.bobbymarcko@auf.edu.ph', 0, 1);
$pdf->Cell(10, 10, '09955370584', 0, 1);
$pdf->Output();