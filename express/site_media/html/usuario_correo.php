<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Peterson F.">
    <title>Sugerencias del servicio</title>
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
            .barra{
                background: #EE5433;
                width: 1000px;
                height: 50px;
                margin: 40px auto;
            }
            .letra{
               padding: 10px;
            }
            .return{
              background-color: #fafafa;
  margin: 1rem;
  padding: 1rem;
  border: 2px solid #ccc;
  /* IMPORTANTE */
  text-align: center;
            }
    </style>
  </head>
  <body>
  <!-- <div class="container">
   <h1 class="formuh1">Contacto rápido.</h1>
    <form id="form1" class="well col-lg-12" action="../enviarsugerencias/" method="post" name="form1">
      <div class="row">
       <div class="col-lg-6">
        <label>Nombre*</label> <input id="Nombre" class="form-control" type="text" name="Nombre" />
        <label>Email*</label> <input id="Email" class="form-control" type="email" name="Email" />
       </div>
        <div class="col-lg-6"><label>Mensaje*</label>
         <textarea id="Mensaje" class="form-control" name="Mensaje" rows="4"></textarea>
        </div>
        <button class="btn btn-default pull-right" type="submit">Enviar</button>
      </div>
    </form>
  </div> -->
  <div class = "barra">
        <h2 class = "centro letra ">Confirmar correo</h2>
        <FONT FACE="courier"></FONT>
    </div>
  <div class = "general">
<form name="nombre_formulario" method="POST" action="../confirmar/">

    <fieldset>
        <div class="row">
        <div class="col-lg-6">
                <label>Nombre</label> <input id="Nombre" class="form-control" type="text" name="Nombre" /><br>
                <label>Email</label> <input id="Email" class="form-control" type="email" name="Email" />
        </div>
            <div class="col-lg-6"><label>Mensaje</label>
                <textarea id="Mensaje" class="form-control" name="Mensaje" rows="4"></textarea>
            </div>
                <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
    </fieldset>

</form>

<a href="../home/">Regresar</a>


  </body>
</html>
