<?php
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage("L");
$pdf->SetFillColor(192);
$pdf->RoundedRect(60, 30, 68, 46, 5, '13', 'DF');
$pdf->SetFont('Arial','',16);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0);
$pdf->Cell(100,6,"Nom",1,0,'L',1);
$pdf->Cell(150,6,"Jackie",1,1,'L',1);
$pdf->Cell(100,6,utf8_decode("Prénom"),1,0,'L',1);
$pdf->Cell(150,6,"hey",1,1,'L',1);
$pdf->Cell(100,6,"Fonction",1,0,'L',1);
$pdf->Cell(150,6,"ouououou",1,1,'L',1);
$pdf->Cell(100,6,"Lieu d'intervention",1,0,'L',1);
$pdf->Cell(150,6,"Lyon",1,1,'L',1);
$pdf->Cell(0,6,"",0,1,'L',0);
$pdf->Cell(100,6,utf8_decode("Responsable hiérarchique"),1,0,'L',1);
$pdf->Cell(150,6,"moi",1,1,'L',1);
$pdf->Cell(0,6,"",0,1,'L',0);
$pdf->Cell(250,6,"DEMANDE",0,0,'C',0);
$pdf->Output();
?>
 