
<?php
session_start(); //iniciamos el manejo de sesiones
if(isset($_SESSION["Usuario"])) //si la variable de sesion "color" existe, entonces...
{
 echo "Bienvenido:" . $_SESSION["Usuario"];
} else 
{
	//echo "sssss";	
 $Var="Erroro login";
 //echo  $Var;	
}
?>
<!DOCTYPE html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<html lang="es">
<meta charset="UTF-8"/>
  </head>
  
  <body>
		 <div id="Contenedor">
		 	<div class="texto">Inicio de Sesión para RUMETRAB</div>
		 	<br>
		 <div class="ContentForm">

		 	<form action="?c=Registro&a=validar" method="POST" enctype="aplication/x-www-form-urlecoded">
		 		<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><img src="imagenes/usuar.png"></span>
				  <LABEL class="textous" for="caja1">Nombre de Usuario </LABEL>
				
				  <input type="text" id="caja1" class="form-control"name="NUsuario" placeholder="Usuario" required > 
				</div>
				<br>
				<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="sizing-addon1"><img src="imagenes/usuarP.png"></span>
				  <LABEL class="textous" for="caja1">Password / Contraseña </LABEL>
				  <input type="Password" id="caja2" name="Pass" class="form-control"  placeholder="Contraseña" required >
				</div>
				<!--div> <label><?php  echo $Var;?></label></div-->
				<br>
				<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
			</form>
		 </div>		
	  </div>
		 
<!--p>otra</p>

<button onclick="registrar()"> Nuevo Registro</button>
<script type="text/javascript">
	function registrar(){
		window.location="registrar.php";
	}
</script-->
 </body>
</html>


