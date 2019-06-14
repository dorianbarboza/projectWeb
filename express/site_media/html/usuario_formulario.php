<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
            .centro{
                text-align: center;
            }

            .general{
            width: 500px;
            height: 500px;

            margin: auto;
            padding: 30px;
            }


            #wrapper {
                width:450px;
                margin:0 auto;
                font-family:Verdana, sans-serif;
            }
            legend {
                color:#0481b1;
                font-size:16px;
                padding:0 10px;
                background:#fff;

                box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
                padding:5px 10px;
                text-transform:uppercase;
                font-family:Helvetica, sans-serif;
                font-weight:bold;
            }
            fieldset {
                border-radius:4px;

                padding:20px;
                border-color:rgba(4, 129, 177, 0.4);
            }
            input,
            textarea {
                color: #373737;
                background: #fff;

                font-size: 14px;
                line-height: 1.2em;
                margin-bottom:15px;
            }


            input[type="text"],
            input[type="password"]{
                padding: 8px 6px;
                height: 22px;
                width:280px;
            }



            input[type="submit"]{
                background: #222;
                border: none;
                text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
                text-transform:uppercase;
                color: #eee;
                cursor: pointer;
                font-size: 15px;
                margin: 5px 0;
                padding: 5px 22px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                -webkit-border-radius:4px;
                -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
                -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
                box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
            }
            textarea {
                padding:3px;
                width:96%;
                height:100px;
            }

            .small {
                line-height:14px;
                font-size:12px;
                color:#999898;
                margin-bottom:3px;
            }
    </style>

</head>
<body>
<h2 class = "centro">Registro de Usuarios</h2>

<div class = "general">
<form name="nombre_formulario" method="POST" action="/projectWeb/express/usuarios/adduser/">

    <fieldset>

            <div>
                <input type="text" name="Username" autocomplete="off" placeholder="Usuario">
            </div>
            <div>
                <input type="text" name="Password" autocomplete="off" placeholder="Contraseña"/>
            </div>
            <div>
                <input type="text" name="Nombre" autocomplete="off" placeholder="Nombre"/>
            </div>

            <div>
                <input type="text" name="Apellidos" autocomplete="off" placeholder="Apellidos"/>
            </div>

            <div>
                <input type="text" name="Correo" autocomplete="off" placeholder="Correo"/>
            </div>
            <input type="submit" name="submit" value="Guardar"/>
        </fieldset>

</form>
<div class="return">
<a href="../home/">Regresar</a>
</div>
</body>
</html>
