<?php

include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new FPDF();
$pdf->AddFont('NIAGSOL','','NIAGSOL.php');
$pdf->AddFont('GIGI','','GIGI.php');
$pdf->AddFont('TEMPSITC','','TEMPSITC.php');


$pdf->AddPage();
$pdf->SetFont('NIAGSOL','',35);
$pdf->Write(10,'"I am pretty sure I cannott live without being helped!" - Monkey D. Luffy');
$pdf->Ln(20);

$pdf->SetFont('GIGI','',35);
$pdf->Write(10,'"It is okay to lose your way, just do not lose sight of what you have decided." - Roronoa Zoro');
$pdf->Ln(20);

$pdf->SetFont('TEMPSITC','',35);
$pdf->Write(10,'"If you do not take risks, you cannot create a future" - Monkey D. Luffy');
$pdf->Ln(20);

$pdf->Output();