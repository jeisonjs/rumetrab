<?php

// namespace App\Models;


class Registro
{
	private $pdo; 
    public $Seq_Registro;
    public $Departamento_Seq;
    public $Provincia_Seq;
    public $Municipio_Seq;
    public $Comunidad;
	public $Organizacion_Pertenece;
	public $Especialedad_Seq;
	public $SubEspecialidad_Seq;
	public $Primer_Nombre;
	public $Segundo_Nombre;
	public $Primer_Apellido;
	public $Segundo_Apellido;
	public $Tipo_Documento;
	public $Numero_Documento;
	public $complemento;
	public $Expedido;
	public $Fecha_Nacimiento;
	public $Estado_Civil;
	public $Sexo;
	public $Direccion_vive;
	public $Telefono;
	public $Celular;
	public $Tipo_Trabajo;
	public $Direccion_Trabajo;
	public $Anos_Experiencia_Especialidad;
	public $Anos_Experiencia_Sub_Especialidad;
	public $Numero_Pacientes;
	public $Codigo_Formulario;
    public $Fecha_Formulario;
    
	public $Castellano;
	public $Lee;
	public $Escribe;
	public $Quechua;
	public $EscribeQ;
	public $Aymara;
	public $LeeA;
	public $EscribeA;
	public $Guarani;
	public $LeeG;
	public $EscribeG;
	public $Otro;
	public $LeeO;
	public $EscribeO;
    public $Descripcion_idiomaO;
    
	public $HoraRegistro_Formulario;
	public $FechaRegistro_Formulario;

	public $Lee_Quechua;
	public $Certificado_Naci;
    public $Imagen;

	public function __CONSTRUCT()
	{

		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM sys_registro");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar2()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT  pro.Seq_Provincia, pro.Nombre, dep.Nombre as Departamento FROM sys_departamento dep INNER JOIN sys_provincia pro ON Seq_Departamento=Departamento_Seq");

			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarMunicipio()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT mun.Seq_Municipio, mun.Nombre as Municipio, pro.Nombre as Provincia, dep.Nombre as Departamento FROM sys_provincia pro INNER JOIN sys_municipio mun ON Seq_Provincia=Provincia_Seq INNER JOIN sys_departamento dep ON Seq_Departamento=Departamento_Seq");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	/**
	 * Devuelve los registros que conciden con el id dado.
	 *
	 * @param string $Seq_Registro
	 * @return void
	 */
	public function Obtener($Seq_Registro)
	{
		try {
            $query = "
                SELECT * 
                FROM sys_registro 
                WHERE Seq_Registro = ?
            ";

			$stm = $this->pdo->prepare($query);
            $stm->execute(array(
                $Seq_Registro
            ));
            
            return $stm->fetch(PDO::FETCH_OBJ);
            
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	public function Eliminar($Seq_Registro)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM sys_registro WHERE Seq_Registro = ?");			          

			$stm->execute(array($Seq_Registro));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar_Imagen($data)
	{


	
		try 
		{
		
			$sql = "UPDATE sys_registro SET 
							Primer_Nombre = ?, 
							Imagen=? 
							WHERE Seq_Registro = ?";

			$this->pdo->prepare($sql)->execute(array(
				$data->Primer_Nombre,
				$data->Imagen,
				$data->Seq_Registro
				)
			);


			//$query="UPDATE sys_registro SET imagen='$imagen' WHERE Seq_Registro = ?";

			///$resultado=$conexion->query($query);

			if($this)
			{
				echo "Se modificap";

				//header("Location: mostrar.php");
			}
			else
			{
				echo "no modificao";
			}



		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE sys_registro SET 
						Departamento_Seq    = ?, 
						Provincia_Seq    = ?, 
						Municipio_Seq    = ?, 
						Comunidad = ?, 
						Organizacion_Pertenece = ?, 
						Especialedad_Seq = ?,
						SubEspecialidad_Seq = ?,
						Primer_Nombre = ?, 
						Segundo_Nombre = ?,
                        Primer_Apellido = ?,
                        Segundo_Apellido = ?,
                        Tipo_Documento = ?,
                        Numero_Documento = ?,
						complemento = ?,
                        Expedido = ?,
                        Estado_Civil = ?,
						Sexo             = ?, 
						Fecha_Nacimiento = ?,		
					    Castellano = ?, 
						Lee	= ?, 
						Escribe = ?, 
						Quechua = ?, 
						EscribeQ = ?, 
						Aymara = ?, 
						LeeA = ?, 
						EscribeA = ?, 
						Guarani = ?, 
						LeeG = ?, 
						EscribeG = ?, 
						Otro = ?, 
						LeeO = ?, 
						EscribeO = ?, 
						Descripcion_idiomaO = ?, 
						Direccion_vive = ?, 
						Telefono = ?, 
						Celular = ?, 
						Tipo_Trabajo = ?, 
						Direccion_Trabajo = ?, 
						Anos_Experiencia_Especialidad = ?, 
						Anos_Experiencia_Sub_Especialidad = ?, 
						Numero_Pacientes = ?, 
						Codigo_Formulario = ?, 
						Fecha_Formulario = ?, 
						HoraRegistro_Formulario	= ?, 
						FechaRegistro_Formulario = ?, 
						Lee_Quechua	= ?, 
						Certificado_Naci = ?
					
				    WHERE Seq_Registro = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        
                        $data->Departamento_Seq,    
					    $data->Provincia_Seq,
					    $data->Municipio_Seq,
					    $data->Comunidad,	
					    $data->Organizacion_Pertenece,
				        $data->Especialedad_Seq,
						$data->SubEspecialidad_Seq,
                        $data->Primer_Nombre,
						$data->Segundo_Nombre,
						$data->Primer_Apellido,
						$data->Segundo_Apellido,
						$data->Tipo_Documento,
					    $data->Numero_Documento,
					    $data->complemento,
					    $data->Expedido,
					    $data->Estado_Civil,
						$data->Sexo,
						$data->Fecha_Nacimiento,
						$data->Castellano,
						$data->Lee,
						$data->Escribe,
						$data->Quechua,
						$data->EscribeQ,
						$data->Aymara,
						$data->LeeA,
						$data->EscribeA,
						$data->Guarani,
						$data->LeeG,
						$data->EscribeG,
						$data->Otro,
						$data->LeeO,
						$data->EscribeO,
						$data->Descripcion_idiomaO,
						$data->Direccion_vive,
						$data->Telefono,
						$data->Celular,
						$data->Tipo_Trabajo,
						$data->Direccion_Trabajo,
						$data->Anos_Experiencia_Especialidad,
						$data->Anos_Experiencia_Sub_Especialidad,
						$data->Numero_Pacientes,
						$data->Codigo_Formulario,
						$data->Fecha_Formulario,
						$data->HoraRegistro_Formulario,
						$data->FechaRegistro_Formulario,
						$data->Lee_Quechua,
						$data->Certificado_Naci,
    
                    	$data->Seq_Registro

					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Registro $data)
	{
        
		try {
            $sql = "
                INSERT INTO sys_registro 
                    (Departamento_Seq, Provincia_Seq, Municipio_Seq, Comunidad, Organizacion_Pertenece, 
                    Especialedad_Seq, SubEspecialidad_Seq, Primer_Nombre, Segundo_Nombre, Primer_Apellido, 
                    Segundo_Apellido, Tipo_Documento, Numero_Documento, complemento, Expedido, Estado_Civil, Sexo, 
                    Fecha_Nacimiento, Castellano, Lee, Escribe, Quechua, EscribeQ, Aymara, LeeA, EscribeA, 
                    Guarani, LeeG, EscribeG, Otro, LeeO, EscribeO, Descripcion_idiomaO, Direccion_vive, Telefono, 
                    Celular, Tipo_Trabajo, Direccion_Trabajo, Anos_Experiencia_Especialidad, 
                    Anos_Experiencia_Sub_Especialidad, Numero_Pacientes, Codigo_Formulario, Fecha_Formulario, 
                    HoraRegistro_Formulario, FechaRegistro_Formulario, Lee_Quechua, Certificado_Naci, 
                    FechaRegistro_Servidor) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 
                        ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
	                $data->Departamento_Seq,
					$data->Provincia_Seq,
					$data->Municipio_Seq,
					$data->Comunidad,	
					$data->Organizacion_Pertenece,
				    $data->Especialedad_Seq,
					$data->SubEspecialidad_Seq,
	                $data->Primer_Nombre,
					$data->Segundo_Nombre,
					$data->Primer_Apellido,
					$data->Segundo_Apellido,
					$data->Tipo_Documento,
					$data->Numero_Documento,
					$data->complemento,
					$data->Expedido,
					$data->Estado_Civil,
					$data->Sexo,
					$data->Fecha_Nacimiento,

					$data->Castellano,
					$data->Lee,
					$data->Escribe,
					$data->Quechua,
					$data->EscribeQ,
					$data->Aymara,
					$data->LeeA,
					$data->EscribeA,
					$data->Guarani,
					$data->LeeG,
					$data->EscribeG,
					$data->Otro,
					$data->LeeO,
					$data->EscribeO,
					$data->Descripcion_idiomaO,

				    $data->Direccion_vive,
					$data->Telefono,
					$data->Celular,
					$data->Tipo_Trabajo,
					$data->Direccion_Trabajo,
					$data->Anos_Experiencia_Especialidad,
					$data->Anos_Experiencia_Sub_Especialidad,
					$data->Numero_Pacientes,
					$data->Codigo_Formulario,
					$data->Fecha_Formulario,
					$data->HoraRegistro_Formulario,
					$data->FechaRegistro_Formulario,
					$data->Lee_Quechua,
					$data->Certificado_Naci,
                    date('Y-m-d H:i:s')

                )
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
}