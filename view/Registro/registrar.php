<?php
session_start();
?>
<h1 class="page-header"></h1>
<!--<p>Bienvenidos a todos!!!!!!t laborum.</p>-->
<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-12">
          <div class="row">
            <div class="col-md-3 col-md-pull-9"> 



<form action="insertar.php" method="POST" enctype="aplication/x-www-form-urlecoded">
	<label for="caja1"><p>Nombre de Usuario</p>
	<p><input type="text" id="caja1" name="NUsuario" placeholder="Nombre de Usuario" required autofocus ></p> 
	</label>
	<label for="caja2"><p>Contraseña</p>
	<p><input type="Password" id="caja2" name="Password" placeholder="Contraseña" required ></p> 
	</label>
<input type="submit" Value="Registrar Nuevo Us">

</form>
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

     </div><!--/row-->
  </div><!--/cointeiner-->
