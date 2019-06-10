<?php
	$conect = new mysqli("localhost","root","") or die("No se encontró el servidor");
	mysqli_select_db($conect,"bdboletaje")or die("No se encontró la base de datos");
?>