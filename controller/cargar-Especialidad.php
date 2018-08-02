<?php
include("../model/class.mysql.php");
include("../model/class.combos.php");
$selects = new selects();
$Esp = $selects->cargarEsp();
foreach($Esp as $key=>$value)
{
		echo "<option value=\"$key\">$value</option>";
}

?>