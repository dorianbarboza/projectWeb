<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	// Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'Reporte Servicio Reparto',0,1,'C');
	$this->Ln(10);
	// Ensure table header is printed
	parent::Header();
}
}

// Connect to database
$link = mysqli_connect('localhost','root','','reparto');

$pdf = new PDF();
$pdf->AddPage();
// First table: output all columns
$pdf->Table($link,'select * from usuario order by IdUsuario');
$pdf->AddPage();
// Second table: specify 3 columns
$pdf->AddCol('IdUsuario',20,'','C');
$pdf->AddCol('nombre',40,'contrasena');
$pdf->AddCol('nombre',40,'correo (2001)','R');
$prop = array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table($link,'select nombre, format(nombre,0) as nombre, IdUsuario from usuario order by IdUsuario limit 0,10',$prop);
$pdf->Output();
?>
