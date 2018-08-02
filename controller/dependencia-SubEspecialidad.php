<?php
include("../model/class.mysql.php");
include("../model/class.combos.php");
$SubEspe = new selects();
$SubEspe->code = $_GET["code"];
$SubEspe = $SubEspe->cargarSubEsp();
foreach($SubEspe as $key=>$value)
{
		echo "<option value=\"$key\">$value</option>";
}
?>