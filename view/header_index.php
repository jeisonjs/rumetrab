<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <title>RUMETRAB</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/estilo.css" />
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

          <div style="background-color:#ffae00; height: 2px"> </div>
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
                    <a href="?c=Registro">Inicio</a>
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
  
  <script src="assets/jquery/jquery-1.9.0.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</html>

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