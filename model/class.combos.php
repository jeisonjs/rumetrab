<?php

class selects extends MySQL
{
	var $code = "";
	
	function cargarDepartamento()
	{
		$consulta = parent::consulta("
            SELECT Seq_Departamento, Nombre
            FROM sys_departamento 
            ORDER BY Seq_Departamento ASC
        ");

        $num_total_registros = parent::num_rows($consulta);
        
		if($num_total_registros>0)
		{
			$Depto = array();
			while($Dept = parent::fetch_assoc($consulta))
			{
				$code = $Dept["Seq_Departamento"];
				$name = $Dept["Nombre"];				
				$Depto[$code]=$name;

			}
			return $Depto;
		}
		else
		{
			return false;
		}
	}

	function cargarProvincia()
	{
		
		$consulta = parent::consulta("
            SELECT Seq_Provincia, Nombre
            FROM sys_provincia 
            WHERE Departamento_Seq = '".$this->code."'
        ");

        $num_total_registros = parent::num_rows($consulta);
        
		if($num_total_registros>0)
		{
			$Provi = array();
			while($Prov = parent::fetch_assoc($consulta))
			{
				$codeP = $Prov["Seq_Provincia"];
				$name = $Prov["Nombre"];				
				$Provi[$codeP]=$name;
			}
			return $Provi;
		}
		else
		{
			return false;
		}
	}

	function cargarMunicipio()
	{
		$consulta = parent::consulta("
            SELECT Seq_Municipio, Nombre 
            FROM sys_municipio 
            WHERE Provincia_Seq = '".$this->code."'
        ");
        
        $num_total_registros = parent::num_rows($consulta);

		if($num_total_registros>0)
		{
			$Muni = array();
			while($Mun = parent::fetch_assoc($consulta))
			{
				$codeP = $Mun["Seq_Municipio"];
				$name = $Mun["Nombre"];				
				$Muni[$codeP]=$name;
			}
			return $Muni;
		}
		else
		{
			return false;
		}
	}	
	function cargarDepartamentoCI()
	{
		$consulta = parent::consulta("
            SELECT Seq_Departamento, Nombre
            FROM sys_departamento 
            ORDER BY Seq_Departamento ASC
        ");

        $num_total_registros = parent::num_rows($consulta);
        
		if($num_total_registros>0)
		{
			$Depto = array();
			while($Dept = parent::fetch_assoc($consulta))
			{
				$code = $Dept["Seq_Departamento"];
				$name = $Dept["Nombre"];				
				$Depto[$code]=$name;

			}
			return $Depto;
		}
		else
		{
			return false;
		}
	}
	function cargarEsp()
	{
		$consulta = parent::consulta("
            SELECT Seq_Especialedad, Nombre
            FROM sys_especialidad 
            ORDER BY Seq_Especialedad ASC
        ");

        $num_total_registros = parent::num_rows($consulta);
        
		if($num_total_registros>0)
		{
			$Depto = array();
			while($Dept = parent::fetch_assoc($consulta))
			{
				$code = $Dept["Seq_Especialedad"];
				$name = $Dept["Nombre"];				
				$Depto[$code]=$name;

			}
			return $Depto;
		}
		else
		{
			return false;
		}
	}

	function cargarSubEsp()
	{
		$consulta = parent::consulta("
            SELECT Seq_SubEspecialidad, Nombre
            FROM sys_subespecialidad 
            WHERE Especialedad_Seq = '".$this->code."'
        ");

        $num_total_registros = parent::num_rows($consulta);
        
		if($num_total_registros>0)
		{
			$Provi = array();
			while($Prov = parent::fetch_assoc($consulta))
			{
				$codeP = $Prov["Seq_SubEspecialidad"];
				$name = $Prov["Nombre"];				
				$Provi[$codeP]=$name;
			}
			return $Provi;
		}
		else
		{
			return false;
		}
	}
}
?>

