<?php

namespace App\Models\Dao;


class TerritorialDistributionDao
{
    private $connection; 

    
    public function __construct()
	{
		try {
			$this->connection = \Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
    }

    public function getAllDepartaments() 
    {
        $query = "
            SELECT Seq_Departamento AS id, Nombre AS name
            FROM sys_departamento 
            ORDER BY id ASC
        ";

        // Prepare query.
        $stmt = $this->connection->prepare( $query );
        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getProvinceByDepartament($departamento_id) 
    {
        $query = "
            SELECT Seq_Provincia AS id, Nombre AS name, Departamento_Seq AS departamento_id
            FROM sys_provincia
            WHERE Departamento_Seq = :departamento_id;
        ";

        // Prepare query.
        $stmt = $this->connection->prepare( $query );

        // Sanitize.
        $departamento_id = htmlspecialchars(strip_tags($departamento_id));

        // Asignando los valores que requiere el query.
        $stmt->bindParam(':departamento_id',  $departamento_id,  \PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getMunicipioByProvince($provincia_id) 
    {
        $query = "
            SELECT Seq_Municipio AS id, Nombre AS name, Provincia_Seq AS provincia_id
            FROM sys_municipio 
            WHERE Provincia_Seq = :provincia_id;
        ";

        // Prepare query.
        $stmt = $this->connection->prepare( $query );
        
        // Sanitize.
        $provincia_id = htmlspecialchars(strip_tags($provincia_id));

        // Asignando los valores que requiere el query.
        $stmt->bindParam(':provincia_id',  $provincia_id,  \PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}