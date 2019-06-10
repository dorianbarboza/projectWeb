<?php
	session_start();
	include 'Conexion.php';
	if(isset($_SESSION['nombre'])){
	echo '<script> window.location="../principal/"; </script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login Admin</title>
	<meta charset="utf-8">

	<style>
		
		.orientacion{
			margin: 150px;
			padding-left: 400px;
        
		}

		.redondeado {
			border-radius: 5px;
		}
		
		.espacioInput{
			
			padding-left: 15px;
        
		}


	</style>
</head>
<body>
	<div class = "orientacion">
		<div class = "">
			<h1>Inicio de sesion</h1>
			<br>
			
			<div class = "espacioInput">
			<form method="post" action= "../validar/">
				<input type="text" class="form-control redondeado" name="user" autocomplete="off" required><br><br>
				<input type="password" class="form-control redondeado" name="pw" autocomplete="off" required><br><br>
				<input type="submit" class="btn btn-success" name="login" value="Entrar">
			</form>
			</div>
		</div>
	</div>
</body>
</html>