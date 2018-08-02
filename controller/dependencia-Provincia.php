<?php
include("../model/class.mysql.php");
include("../model/class.combos.php");
$Provincias = new selects();
$Provincias->code = $_GET["code"];
$Provincias = $Provincias->cargarProvincia();
foreach($Provincias as $key=>$value)
{
		echo "<option value=\"$key\">$value</option>";
}
?>