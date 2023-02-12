<?php

include_once "../fpdf/fpdf.php";

// necesito todos los libros de la base de datos para poder generar el pdf

class PDF extends FPDF{
    // change the encoding to utf-8
    function Header(){
        $this->SetFont('Arial','B',15);
        $this->Cell(50,10,'EL ARCHIVO',0,0,'C');
        $this->Cell(100,10,'Libros',0,0,'C');
        $todaysDate = date("Y/m/d");
        $this-> Cell(30,10,$todaysDate,0,0,'C');
        $this->Ln(10);
        $this->SetDrawColor(9,194,231);
        $this->Line(10, $this->GetY(), 200, $this->GetY());
        $this->Ln(15);

    }

    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',10);
include_once "../includes/conexion.php";
$conexion = new Conexion();
$sql = $conexion -> conectar() -> prepare("SELECT * FROM libros");
$sql -> execute();
define('euro', chr(128));


while($row = $sql -> fetch(PDO::FETCH_ASSOC)){
    $pdf->Cell(30,10,'ISBN: ',0,0,'R',0);
    $pdf->Cell(35,10,$row['isbn'],0,0,'L',0);
    $pdf->Ln(7);
    $pdf->Cell(30,10,'TITULO: ',0,0,'R',0);
    $pdf->Cell(35,10,utf8_decode($row['titulo']),0,0,'L',0);
    $pdf->Ln(7);
    $pdf->Cell(30,10,'AUTOR: ',0,0,'R',0);
    $pdf->Cell(35,10,utf8_decode($row['autor']),0,0,'L',0);
    $pdf->Ln(7);
    $pdf->Cell(30,10,'EDITORIAL: ',0,0,'R',0);
    $pdf->Cell(35,10,utf8_decode($row['editorial']),0,0,'L',0);
    $pdf->Ln(7);
    $pdf->Cell(30,10,'PRECIO: ',0,0,'R',0);
    $pdf->Cell(20,10,($row['precio']/100) . " " . euro,0,0,'L',0);
    $pdf->Ln(10);
    // A black line
    $pdf->SetDrawColor(0,0,0);
    $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());
    $pdf->SetDrawColor(255,255,255);
    $pdf->Ln(10);
}

$pdf->Output();

?>