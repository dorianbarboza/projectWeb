<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	// Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'Reporte de la BD',0,1,'C');
	$this->Ln(10);
	// Ensure table header is printed
	parent::Header();
}
}

// Connect to database
$link = mysqli_connect('localhost','root','','bdBoletaje');

$pdf = new PDF();
$pdf->AddPage();
// First table: output all columns
$pdf->Table($link,'select * from cliente order by nombre');
$pdf->AddPage();
// Second table: specify 3 columns
$pdf->AddCol('clienteID',20,'','C');
$pdf->AddCol('nombre',40,'apellidos');
$pdf->AddCol('nombre',40,'direccion (2001)','R');
$prop = array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table($link,'select nombre, format(nombre,0) as nombre, clienteID from cliente order by clienteID limit 0,10',$prop);
$pdf->Output();
?>
