<?php

namespace App\Models\Dao;
// require_once '../database.php';


class UserDao
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
    
    /**
     * Retorna un array con los datos del usuario dado un id.
     *
     * @param int $id - Identidicador del rol en la base de datos.
     * @return array
     */
    public function getUser($id) {

        $query = "
            SELECT Seq_Usuario, Usuario, Password, Fecha_Registro, sys_rol_id
            FROM sys_usuario 
            WHERE Seq_Usuario = :id
        ";

        // Prepare query.
        $stmt = $this->connection->prepare( $query );

        // Sanitize.
        $id = htmlspecialchars(strip_tags($id));

        // Asignando los valores que requiere el query.
        $stmt->bindParam(':id', $id,  \PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
    
    /**
     * Retorna un array con los datos del usuario dado un nombre.
     *
     * @param string $key - Nombre con el cual se guardo el usuario.
     * @return array
     */
    public function getUserByName($name) {

        $query = "
            SELECT Seq_Usuario, Usuario, Password, Fecha_Registro, sys_rol_id
            FROM sys_usuario 
            WHERE Usuario = :name
        ";

        // Prepare query.
        $stmt = $this->connection->prepare( $query );

        // Sanitize.
        $name = htmlspecialchars(strip_tags($name));

        // Asignando los valores que requiere el query.
        $stmt->bindParam(':name', $name,  \PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    /**
     * Retorna todos los usuarios registrados.
     *
     * @return array
     */
    public function getAllUsers() {

        $query = "
            SELECT Seq_Usuario, Usuario, Password, Fecha_Registro, sys_rol_id
            FROM sys_usuario;
        ";

        // Prepare query.
        $stmt = $this->connection->prepare( $query );
        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    /**
     * Guardar un usuario en la base de datos
     *
     * @param \App\Models\User $user
     * @return boolean
     */
    public function create(\App\Models\User $user) {

        $query = "
            INSERT INTO sys_usuario (Usuario, Password, Fecha_Registro, Persona_Seq, Departamento_Seq, sys_rol_id) VALUES 
            (:usuario, :password, NOW(), 0, 0, :rol_id);
        ";

		// Prepare query.
        $stmt = $this->connection->prepare( $query );

        // Sanitize.
        $usuario  = htmlspecialchars(strip_tags($user->Usuario));
        $password = htmlspecialchars(strip_tags($user->Password));
        $rol_id   = htmlspecialchars(strip_tags($user->sys_rol_id));

        // Asignando los valores que requiere el query.
        $stmt->bindParam(':usuario',  $usuario,  \PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, \PDO::PARAM_STR);
        $stmt->bindParam(':rol_id',   $rol_id,   \PDO::PARAM_INT);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Actualiza un usuario en la base de datos.
     *
     * @param \App\Models\User $user
     * @return boolean
     */
    public function update(\App\Models\User $user) {

        $query = "
            UPDATE sys_usuario
            SET Usuario = :usuario, Password = :password, sys_rol_id = :rol_id
            WHERE Seq_Usuario = :id;
        ";

		// Prepare query.
        $stmt = $this->connection->prepare( $query );

        // Sanitize.
        $id       = htmlspecialchars(strip_tags($user->Seq_Usuario));
        $usuario  = htmlspecialchars(strip_tags($user->Usuario));
        $password = htmlspecialchars(strip_tags($user->Password));
        $rol_id   = htmlspecialchars(strip_tags($user->sys_rol_id));

        // Asignando los valores que requiere el query.
        $stmt->bindParam(':id',       $id,       \PDO::PARAM_INT);
        $stmt->bindParam(':usuario',  $usuario,  \PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, \PDO::PARAM_STR);
        $stmt->bindParam(':rol_id',   $rol_id,   \PDO::PARAM_INT);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * Elimina un usuario en la base de datos.
     *
     * @param string $id - Identificador unico del usuario en la base de datos.
     * @return boolean
     */
    public function delete($id) {

        $query = "
            DELETE FROM sys_usuario
            WHERE Seq_Usuario = :id;
        ";

		// Prepare query.
        $stmt = $this->connection->prepare( $query );

        // Sanitize.
        $id = htmlspecialchars(strip_tags($id));

        // Asignando los valores que requiere el query.
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function registerSessionStart($usuario_id)
    {
        $query = "
            INSERT INTO sys_auditoria_usuario(usuario_id, session_start) VALUES 
            (:usuario_id, NOW());
        ";

		// Prepare query.
        $stmt = $this->connection->prepare( $query );

        // Sanitize.
        $usuario_id = htmlspecialchars(strip_tags($usuario_id));

        // Asignando los valores que requiere el query.
        $stmt->bindParam(':usuario_id', $usuario_id, \PDO::PARAM_INT);

        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function registerSessionFinish($session_id)
    {
        $query = "
            UPDATE sys_auditoria_usuario SET session_finish = NOW()
            WHERE id = :session_id;
        ";
        
		// Prepare query.
        $stmt = $this->connection->prepare( $query );

        // Sanitize.
        $session_id = htmlspecialchars(strip_tags($session_id));
        
        // Asignando los valores que requiere el query.
        $stmt->bindParam(':session_id', $session_id, \PDO::PARAM_INT);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
 
    public function getLastLogin($usuario_id)
    {
        if ($usuario_id == \App\Controller\Auth\Auth::user()->Seq_Usuario) {
            $query = "
                SELECT id, session_start, session_finish 
                FROM sys_auditoria_usuario 
                WHERE usuario_id = :usuario_id
                ORDER BY id DESC
                LIMIT 1, 1;
            ";
        } else {
            $query = "
                SELECT id, session_start, session_finish 
                FROM sys_auditoria_usuario 
                WHERE usuario_id = :usuario_id
                ORDER BY id DESC
                LIMIT 0, 1;
            ";
        }

        // Prepare query.
        $stmt = $this->connection->prepare( $query );

        // Sanitize.
        $usuario_id = htmlspecialchars(strip_tags($usuario_id));

        // Asignando los valores que requiere el query.
        $stmt->bindParam(':usuario_id', $usuario_id,  \PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        return $result;
    }
}