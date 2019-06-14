<?php
require('access.php');

//$conn=odbc_connect('reparto','','');
$conn = mysqli_connect('localhost','root','','reparto');
if(!$conn)
	die('Connection failed');
$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',14);
$sql='SELECT Cliente.Username, Repartidor.Nombre, ServicioReparto.ID_ServicioReparto, ServicioReparto.FechaServicio, ServicioReparto.CostoTotal
FROM ServicioReparto, Cliente, Repartidor
WHERE ServicioReparto.ID_Cliente = Cliente.ID_Cliente
AND ServicioReparto.ID_Repartidor = Repartidor.ID_Repartidor';
$col=array('Cliente'=>20, 'Repartidor'=>40, 'Servicio'=>40,'Fecha'=>60, 'Total'=>60);
$pdf->Table($sql,$col);
$pdf->Output();
?>
