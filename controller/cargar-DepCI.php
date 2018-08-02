<?php
include("../model/class.mysql.php");
include("../model/class.combos.php");
$selects = new selects();
$DEPCI = $selects->cargarDepartamentoCI();
foreach($DEPCI as $key=>$value)
{
		echo "<option value=\"$key\">$value</option>";
}
