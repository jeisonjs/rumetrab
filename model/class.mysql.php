<?php

class MySQL
{
  var $conexion;

  function MySQL()
  {
  	if(!isset($this->conexion))
	{
        $this->conexion = mysqli_connect("localhost","root","0000") 
            or die(mysqli_error($this->conexion));
          
        mysqli_select_db($this->conexion, "rumetra") 
            or die(mysqli_error($this->conexion));

        // mysqli_query("SET NAMES 'utf8'");   
  	}
  }


 function consulta($consulta)
 {
    $resultado = mysqli_query($this->conexion, $consulta);
    
  	if(!$resultado)
	{
  		echo 'MySQL Error: ' . mysqli_error();
	    exit;
    }
    
  	return $resultado; 
  }


 function fetch_array($consulta)
 { 
  	return mysqli_fetch_array($consulta);
 }
 
 function num_rows($consulta)
 { 
 	 return mysqli_num_rows($consulta);
 }
 
 function fetch_row($consulta)
 { 
 	 return mysqli_fetch_row($consulta);
 }
 function fetch_assoc($consulta)
 { 
 	 return mysqli_fetch_assoc($consulta);
 } 
 
}

?>