<?php

namespace App\Models\Dao;


class RolDao
{
    private $connection; 

    
    public function __construct()
	{

		try {
			$this->connection = \Database::StartUp();     
		}
		catch(\Exception $e)
		{
			die($e->getMessage());
		}
    }
    
    /**
     * Retorna un array con los datos del usuario dado un id.
     *
     * @param int $key
     * @return array
     */
    public function read($key) {

        $query = "
            SELECT Seq_Rol, Funcion, Descripcion
            FROM sys_rol
            WHERE Seq_Rol = :id
        ";

        // Prepare query.
        $stmt = $this->connection->prepare( $query );

        // Sanitize.
        $key = htmlspecialchars(strip_tags($key));

        // Asignando los valores que requiere el query.
        $stmt->bindParam(':id', $key,  \PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    /**
     * Retorna un array con los roles registrados.
     *
     * @return array
     */
    public function getAllRoles() {

        $query = "
            SELECT Seq_Rol, Funcion, Descripcion
            FROM sys_rol
        ";

        // Prepare query.
        $stmt = $this->connection->prepare( $query );
        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}