<?php

  if(isset($_SESSION["Usuario"])){ 
    header('Location: ?c=Registro&a=Principal');
  }

?>
  <!DOCTYPE html>
  <html lang="es">

  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/v2/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/v2/img/min-salud.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Rumetrab | Iniciar Sesión</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
    />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/v2/fonts/fontawesome/css/font-awesome.min.css">
    <!-- CSS Files -->
    <!-- <link href="assets/v2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/v2/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
    <link href="assets/v2/css/daterangepicker.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="./assets/v2/css/styles.css">
    <style>
      body {
        background-image: 
        /* radial-gradient(ellipse at bottom, rgba(102, 114, 119, 0.23) 20%, rgba(19, 20, 23, 0.56) 100%), 
    	                    url('imagenes/rumetrabimagen2.jpg'); */
          linear-gradient(to right, rgba(15, 32, 39, 0.8), rgba(32, 58, 67, 0.6), rgba(44, 83, 100, 0.71)), url(imagenes/a4.jpg);
        background-position: center center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
      }

      .card {
        border-radius: 3px;
      }

      .footer-white {
        color: #fff;
      }
    </style>
  </head>

  <body>
    <div class="row m-0 align-items-center" style="height: 100vh;">
      <div class="col-md-6 ml-auto mr-auto col-login">
        <div class="card card-user">
          <div class="image p-4 pb-0">
            <img src="imagenes/cabecejjjra.jpg" alt="...">
          </div>
          <div class="card-body">

            <form action="?c=Registro&a=validar" method="POST" enctype="aplication/x-www-form-urlecoded" autocomplete="off">
              <div class="form">
                <div class="form-group">
                  <label for="inputEmail4">Nombre de Usuario</label>
                  <input type="text" class="form-control" id="caja1" name="NUsuario" placeholder="Usuario" required autofocus>
                </div>

                <div class="form-group">
                  <label for="inputEmail4">Password / Contraseña</label>
                  <input type="password" id="caja2" name="Pass" class="form-control" placeholder="Contraseña" required>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" id="IngresoLog" class="btn btn-primary submit-btn btn-block">Entrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <footer class="footer footer-black footer-white text-center font-weight-bold">
          <div class="container-fluid">
            <div class="row">

              <div class="credits ml-auto mr-auto">
                <span class="copyright col-12">
                  <p>
                    Viceministerio de Medicina Tradicional e Interculturalidad
                    <br> Dirección: Zona Central - Calle Cochabamba Edificio Lotería 3er Piso Telefonos 2900294- Fax -2900294
                    - 2124800 La Paz - Bolivia
                  </p>
                </span>
                <span class="copyright col-12">
                  ©
                  <script>
                    document.write(new Date().getFullYear())
                  </script>
                  <!-- , made with
                  <i class="fa fa-heart heart"></i> by ... -->
                </span>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

  </body>
  <!--   Core JS Files   -->
  <?php
    include_once __DIR__ . '/../partials/scripts.php';
  ?>

  </html>