<?php
include("../model/class.mysql.php");
include("../model/class.combos.php");
$Municipio = new selects();
$Municipio->code = $_GET["code"];
$Municipio = $Municipio->cargarMunicipio();
foreach($Municipio as $key=>$value)
{
		echo "<option value=\"$key\">$value</option>";
}
?>