<?php

include_once "../fpdf/fpdf.php";
include_once "../includes/conexion.php";

class PDF extends FPDF{
    // change the encoding to utf-8
    function Header(){
        $this->SetFont('Arial','B',15);
        $this->Cell(50,10,'EL ARCHIVO',0,0,'C');
        $this->Cell(100,10,'Ventas',0,0,'C');
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
define('euro', chr(128));
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

$conexion = new Conexion();
$sql = $conexion -> conectar() -> prepare("SELECT * FROM ventas");
$sql -> execute();

while($row = $sql -> fetch(PDO::FETCH_ASSOC)){
    $pdf->Cell(30,10,'ID Venta: ',0,0,'R',0);
    $pdf->Cell(35,10,$row['id_venta'],0,0,'L',0);
    $pdf->Ln(7);
    $pdf->Cell(30,10,'Libro: ',0,0,'R',0);
    $nombreLibro = $conexion -> conectar() -> prepare("SELECT titulo FROM libros WHERE isbn = ?");
    $nombreLibro -> execute([$row['isbn']]);
    $nombreLibro = $nombreLibro -> fetch(PDO::FETCH_ASSOC);
    $pdf->Cell(35,10,utf8_decode($row['isbn'] . " - " . $nombreLibro['titulo']),0,0,'L',0);
    $pdf->Ln(7);
    $precioLibro = $conexion -> conectar() -> prepare("SELECT precio FROM libros WHERE isbn = ?");
    $precioLibro -> execute([$row['isbn']]);
    $precioLibro = $precioLibro -> fetch(PDO::FETCH_ASSOC);
    $pdf->Cell(30,10,'Precio: ',0,0,'R',0);
    $pdf->Cell(35,10,$precioLibro['precio']/100 . " " . euro,0,0,'L',0);
    $pdf->Ln(7);
    $nameVendedor = $conexion -> conectar() -> prepare("SELECT nombre FROM vendedores WHERE id_vendedor = ?");
    $nameVendedor -> execute([$row['id_vendedor']]);
    $nameVendedor = $nameVendedor -> fetch(PDO::FETCH_ASSOC);
    $pdf->Cell(30,10,'VENDEDOR: ',0,0,'R',0);
    $pdf->Cell(35,10,utf8_decode($nameVendedor['nombre']),0,0,'L',0);


    $pdf->Ln(10);
    // A black line
    $pdf->SetDrawColor(0,0,0);
    $pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());
    $pdf->SetDrawColor(255,255,255);
    $pdf->Ln(10);
}

$pdf->Output();

?>