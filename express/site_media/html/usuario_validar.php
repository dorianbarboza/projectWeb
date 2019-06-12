<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
		include 'Conexion.php';
			if(isset($_POST['login'])){
				$user = $_POST['user'];
				$pass = $_POST['pw'];
				$log = $conect ->query("SELECT * FROM Cliente WHERE Username='$user' AND Password='$pass'");
				 if (mysqli_num_rows($log)>0) {
				 	$row = mysqli_fetch_array($log);
					$_SESSION["Username"] = $row['Username'];

					header("Location:../principal/");

				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="../loginn/"; </script>';
				}
			}
		?>
</body>
</html>
