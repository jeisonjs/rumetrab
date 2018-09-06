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
        background-color: #333;
      }

      .col-left,
      .col-right {
        height: 100vh;
      }

      .col-left {
        background-color: #FEFEFE;
      }

      .col-right {
        background-image: radial-gradient(ellipse at bottom, rgba(102, 114, 119, 0.23) 20%, rgba(19, 20, 23, 0.56) 100%), 
          url('imagenes/soja.jpg');
        background-position: center;
        /* background-attachment: fixed; */
        background-repeat: no-repeat;
        background-size: cover;

        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-6 col-left p-md-5 d-flex">
          <div class="row justify-content-center">
            <div class="col-8">
              <div class="pb-0">
                <img src="imagenes/cabecejjjra.jpg" class="img-fluid" alt="...">
              </div>
            </div>
            <div class="col-8">
              <form action="?c=Registro&a=validar" method="POST" enctype="aplication/x-www-form-urlecoded" autocomplete="off">
                <div class="form">
                  <div class="form-group">
                    <label for="inputEmail4">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="caja1" name="NUsuario" placeholder="Usuario" required>
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
            <div class="col-8">
              <footer class="footer footer-black footer-white text-center font-weight-bold">
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
              </footer>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-right d-none d-lg-flex">
          <img src="imagenes/r2.svg" alt="...">
        </div>
      </div>
    </div>

  </body>
  <!--   Core JS Files   -->
  <?php
    include_once __DIR__ . '/../partials/scripts.php';
  ?>

  </html>