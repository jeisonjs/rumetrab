<?php

// Iniciamos el manejo de sesiones
  session_start(); 

  // Si la variable de sesion "color" existe, entonces...
  if(isset($_SESSION["Usuario"])) {

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <title>RUMETRAB</title>

  <link href="assets/css/reporte.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="assets/css/jquery-ui.css" />
  <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />

  <style>
    body {
      padding-top: 10px;
      background-image: url(imagenes/fondo-MS.jpg);
    }
  </style>
</head>

<body>
  <div class="container">
    <div style="background-color:#d2e2f2">
      <header>
        <img class="img-thumbnail" src="imagenes/logo_rumetrab5.jpg">
        <div class "Menu">
          <div class="nav nav-pills nav-stacked" style="background-image:url(imagenes/Fondo_Menu.jpg);background-repeat:repeat;">
            <li class="active">
              <div class="leftMenu">
                <img id="ocultar" src="imagenes/menu.png" href="#info1" class="inf">
                <br>Menu </div>
              <div class="Menusu">
                <label>
                  <?php echo "Bienvenido:  " . $_SESSION["Usuario"];?>
                </label>
              </div>
              <div class="rightMenu">
                <a href="?c=Registro&a=cerrar" class="links_blancos">
                  <img src="imagenes/cerr.png">
                  </br> Cerar sesion </a>
              </div>
            </li>
          </div>
          <div style="background-color:#ffae00; height: 2px"> </div>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div id="info1" class="oculto">
            <div class="col-md-2">
              <ul class="nav nav-pills nav-stacked">
                <li class="active">
                  <a href="#">Opciones</a>
                </li>
                <li>
                  <a href="?c=Registro&a=Principal">Inicio</a>
                </li>
                <li>
                  <a href="?c=Registro&a=Crud">Nuevo Registro</a>
                </li>
                <li>
                  <a href="?c=Registro&a=Buscar">Buscar Médicos Tradicionales</a>
                </li>
                <li>
                  <a href="?c=Registro&a=MT">Listar Médicos Tradicionales Registrados</a>
                </li>
                <li>
                  <a href="?c=Registro&a=Provincia">Listar Provincias</a>
                </li>
                <li>
                  <a href="?c=Registro&a=Municipio">Listar Municipios</a>
                </li>
                <li>
                  <a href="#">Reportes</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
</body>
<!-- Solo usar una sola versión de jquery por archivo.
  <script type="text/javascript" src="assets/js/jquery-1.3.2.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-1.3.2.min.js"></script>
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script> 
-->
<script src="assets/jquery/jquery-1.9.1.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>


<!-- <script src="assets/jquery/jquery.js"></script> -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.anexsoft-validator.js"></script>
<script src="assets/js/ini.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function () {
    $(".oculto").hide();
    $(".inf").click(function () {
      var nodo = $(this).attr("href");

      if ($(nodo).is(":visible")) {
        $(nodo).hide();
        return false;
      } else {
        $(".oculto").hide("slow");
        $(nodo).fadeToggle("fast");
        return false;
      }
    });
  });
</script>

</html>

  <?php
  } else {
    echo "La variable no ha sido declada en la sesión actual";
    header('Location: ?c=Registro&a=index');
  }
?>