<?php
require_once 'fpdf/fpdf.php';
class PDF extends FPDF{
// Cabecera de página
function Header(){
    // Logo
    $this->Image('img/centro.png',10,8,33,15); 
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(40,10,utf8_decode('Viva España'),0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->SetFont('Times','B',9.5);
    $this ->cell(10,10,utf8_decode('ID'),1,0,'C',0);
    $this->Cell(36,10,utf8_decode('NOMBRE'),1,0,'C',0);
    $this->Cell(36,10,utf8_decode('PRIMER APELLIDO'),1,0,'C',0);
    $this->Cell(36,10,utf8_decode('SEGUNDO APELLIDO'),1,0,'C',0);
    $this->Cell(36,10,utf8_decode('EXAMEN PARCIAL'),1,0,'C',0);
    $this->Cell(36,10,utf8_decode('EXAMEN FINAL'),1,0,'C',0);
    $this->Ln();
}

// Pie de página
function Footer(){
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}
$conextion = mysqli_connect("localhost","root","","alumnos") or die("Error en la conexión a la base de datos");
mysqli_set_charset($conextion,"utf8");
$consulta = "SELECT * FROM evaluaciones";
$sql = mysqli_query($conextion,$consulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
// font calibri tamaño 10
$pdf->SetFont('Times','',10);
while($row = $sql->fetch_assoc()){
    $pdf->Cell(10,8,utf8_decode($row['id_alumno']),1,0,'L',0);
    $pdf->Cell(36,8,utf8_decode($row['nombre']),1,0,'L',0);
    $pdf->Cell(36,8,utf8_decode($row['primer_apellido']),1,0,'L',0);
    $pdf->Cell(36,8,utf8_decode($row['segundo_apellido']),1,0,'L',0);
    $pdf->Cell(36,8,utf8_decode($row['examen_parcial']),1,0,'L',0);
    $pdf->Cell(36,8,utf8_decode($row['examen_final']),1,0,'L',0);
    $pdf->Ln();
}

$pdf->Output();
?>