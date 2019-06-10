

<!-- if(isset($_SESSION['nombre'])) {-->
    <?php
        session_start();
        include 'Conexion.php';
       
        if(isset($_SESSION['nombre'])) {?>

<!DOCTYPE html>
<html>
  <head>
      <title>Dashboard</title>
      <meta charset="utf-8">
      <style>

*{
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

body{
	background: ;
}

header{
	width: 100%;
}

.navegacion{
	width: 1000px;
	margin: 30px auto;
	background: #EE5433;
}

.navegacion ul{
	list-style: none;
}

.menu > li{
	position: relative;
	display: inline-block;
}

.menu > li > a{
	display: block;
	padding: 15px 20px;
	color: white;
	font-family: 'Open sans';
	text-decoration: none;
}

.menu li a:hover{
	color: #CE7D35;
	transition: all .3s;
}

/* Submenu*/

.submenu{
	position: absolute;
	background: #333333;
	width: 120%;
	visibility: hidden;
	opacity: 0;
	transition: opacity 1.5s;
}

.submenu li a{
	display: block;
	padding: 15px;
	color: #fff;
	font-family: 'Open sans';
	text-decoration: none;
}

.menu li:hover .submenu{
	visibility: visible;
	opacity: 1;
}

.admin{
            padding-left: 265px;
        }

        .tabla{
            width: 850px;
            text-align: center;
            margin: 40px auto;
            
        }

        table{
            width: 100%;
        }

        .centro{
            text-align: center; 
        }
          /* .tabla{
            width: 850px;
            text-align: center;
            margin: 40px auto;
        }

        table{
            width: 100%;
        }

        #button {
        padding: 0;
        padding-left: 250px;
        
         }
     
        #button li {
            display: inline;
            }

        #button li a {
            font-family: Arial;
            font-size: 15px;
            text-decoration: none;
            float: left;
            padding: 10px;
            background-color: #2175bc;
            color: #fff;
            width: 150px;
            text-align: center;
            }

    
        .centrado{
            text-align: center;
        }

        .admin{
            padding-left: 265px;
        } */
    </style>
  </head>
  <body>
      
  <nav class="navegacion">
			<ul class="menu">
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Usuarios</a>
                <ul class="submenu">
						<li><a href="../formulario/"">Registrar</a></li>
						<li><a href="../editar/">Actualizar</a></li>
						<li><a href="../eliminar/">Eliminar</a></li>
					</ul>
                </li>
				<li><a href="#">Repartidores</a>
					<ul class="submenu">
						<li><a href="#">Registrados</a></li>
					</ul>
				</li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</nav>

      
        <!-- <ul id="button">
            <li><a href="">Inicio</a></li>
            <li><a href="../formulario/">Nuevo usuario</a></li>
            <li><a href="../editar/">Editar</a></li>
            <li><a href="../eliminar/">Eliminar</a></li>
            <li><a href="../../../reportes/ex.php/">Reportes</a></li>
        </ul> -->
        
       <div class = "admin">
        <?php
            echo "Administrador: " .$_SESSION['nombre'] . "<p/>";
            ?> 
            <a href="../cerrarsesion/"><button>Salir</button></a> 
       </div>
          
          
          <h1 style = "text-align: center">Servicio Express</h1>
            <br>
          <h3 style = "text-align: center">Usuarios Registrados</h3>
         
         

      <div class = "tabla">
        <table>
            <tr>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Correo electronico</th>
                <th>Sexo</th>
                <th>Fecha de nacimiento</th>
            </tr>
            <?php 
            $url='http://localhost/api.peopleapp.com/api.mvc/solicitud/obtenerUsuarios/';
            $data=file_get_contents($url);
            $prueba = json_decode($data);      
            ?>

            <?php foreach($prueba->datos as $dato) : ?> 
            <tr>
                <td><?php echo ($dato->idUsuario);?></td> 
                <td><?php echo ($dato->nombre);?></td>
                <td><?php echo ($dato->correo);?></td>  
                <td><?php echo ($dato->sexo);?></td>   
                <td><?php echo ($dato->fechaNacimiento);?></td> 
                  
            </tr>
            <?php endforeach;?>  
        </table>
      </div>
    
    
  </body>
</html>
<?php
}else{
	header("Location:../login/");
}
?>