<?php
include("../model/class.mysql.php");
include("../model/class.combos.php");
$selects = new selects();
$DEP = $selects->cargarDepartamento();
return $DEP;
// foreach($DEP as $key=>$value)
// {
// 		echo "<option value=\"$key\">$value</option>";
// }
?>