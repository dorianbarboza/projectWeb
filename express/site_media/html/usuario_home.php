

<!-- if(isset($_SESSION['nombre'])) {-->
    <?php
        session_start();
        include 'Conexion.php';

        if(isset($_SESSION['Username'])) {
          ?>


      <!doctype html>
      <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
          <meta name="generator" content="Jekyll v3.8.5">
          <title>Home</title>

          <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/offcanvas/">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

          <!-- Bootstrap core CSS -->
      <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


          <style>
            .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }

            @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                font-size: 3.5rem;
              }
            }
            /* CSS */
            html,
body {
  overflow-x: hidden; /* Prevent scroll on narrow devices */
}

body {
  padding-top: 56px;
}

@media (max-width: 991.98px) {
  .offcanvas-collapse {
    position: fixed;
    top: 56px; /* Height of navbar */
    bottom: 0;
    left: 100%;
    width: 100%;
    padding-right: 1rem;
    padding-left: 1rem;
    overflow-y: auto;
    visibility: hidden;
    background-color: #343a40;
    transition: visibility .3s ease-in-out, -webkit-transform .3s ease-in-out;
    transition: transform .3s ease-in-out, visibility .3s ease-in-out;
    transition: transform .3s ease-in-out, visibility .3s ease-in-out, -webkit-transform .3s ease-in-out;
  }
  .offcanvas-collapse.open {
    visibility: visible;
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
  }
}

.nav-scroller {
  position: relative;
  z-index: 2;
  height: 2.75rem;
  overflow-y: hidden;
}

.nav-scroller .nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  padding-bottom: 1rem;
  margin-top: -1px;
  overflow-x: auto;
  color: rgba(255, 255, 255, .75);
  text-align: center;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.nav-underline .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
  color: #6c757d;
}

.nav-underline .nav-link:hover {
  color: #007bff;
}

.nav-underline .active {
  font-weight: 500;
  color: #343a40;
}

.text-white-50 { color: rgba(255, 255, 255, .5); }

.bg-purple { background-color: #6f42c1; }

.lh-100 { line-height: 1; }
.lh-125 { line-height: 1.25; }
.lh-150 { line-height: 1.5; }
          </style>
          <!-- Custom styles for this template -->
          <link href="offcanvas.css" rel="stylesheet">
        </head>

        <body class="bg-light">

          <!-- NAVBAR -->
          <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <a class="navbar-brand mr-auto mr-lg-0" href="#">Express</a>
            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
              <span class="navbar-toggler-icon"></span>
            </button>
          </nav>

          <div class="nav-scroller bg-white shadow-sm">
            <nav class="nav nav-underline">
              <a class="nav-link active" href="#">Dashboard</a>
              <a class="nav-link" href="#">Friends
                <span class="badge badge-pill bg-light align-text-bottom">27</span>
              </a>
          <a class="nav-link" href="#">Explore</a>
          <a class="nav-link" href="#">Suggestions</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link" href="#">Link</a>
        </nav>
      </div>

      <main role="main" class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
          <img class="mr-3" src="/docs/4.3/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
          <div class="lh-100">
            <div class = "admin">
             <?php
                 echo "Perfil: " .$_SESSION['Username'] . "<p/>";
                 ?>

            </div>
          </div>
        </div>

        <a href="../cerrarsesion/">Cerrar sesion</a>



        <div class="my-3 p-3 bg-white rounded shadow-sm">
          <h4 class="border-bottom border-gray pb-2 mb-0">Mi cuenta</h4>
          <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">Completar mi perfil</strong>
              <a href="../editar/">Actualizar</a>
            </p>
          </div>
          <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">Confirmar mi cuenta por correo</strong>
              <a href="../correo/">Confirmacion</a>
            </p>
          </div>
          <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <strong class="d-block text-gray-dark">Eliminar mi cuenta</strong>
              <a href="../eliminar/">Eliminar</a>
            </p>
          </div>
          <small class="d-block text-right mt-3">
          </small>
        </div>

        <div class="my-3 p-3 bg-white rounded shadow-sm">
          <h6 class="border-bottom border-gray pb-2 mb-0">Servicio Reparto</h6>
          <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark">Solicitar Servicio</strong>
                <a href="../servicio/">Pedir</a>
              </div>
            </div>
          </div>
          <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark">Reporte</strong>
                <a href="../../../reportes/ms_access/ex.php/">Reporte</a>
              </div>
              <span class="d-block">@username</span>
            </div>
          </div>
          <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
              <div class="d-flex justify-content-between align-items-center w-100">
                <strong class="text-gray-dark">Full Name</strong>
                <a href="#">Follow</a>
              </div>
              <span class="d-block">@username</span>
            </div>
          </div>
          <small class="d-block text-right mt-3">
            <a href="#">All suggestions</a>
          </small>
        </div>
      </main>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
              <script src="offcanvas.js"></script></body>
      </html>




<?php
}else{
	header("Location:../loginn/");
}
?>
