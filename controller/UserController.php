<?php

namespace App\Controllers;


class UserController
{
    /**
     * Constante para seleccionar el tipo de busqueda a realizar
     * en el metodo getUser().
     */
    const BY_NAME = 1;
 

    /**
     * Retorna una usuario según el id o nombre indicado.
     *
     * @param string $key     - Parametro para usar en la busqueda.
     * @param integer $search - Variablle que determinara el tipo de busqueda.
     * @return \App\Models\User
     */
    public function getUser($key, $search = 0)
    {
        $userDao = new \App\Models\Dao\UserDao;
        $result = ($search == 1) ? $userDao->getUserByName($key) : $userDao->getUser($key) ;
        
        $user = null;
        
        if(count($result) == 1) {

            foreach ($result as $item) {
                $user = new \App\Models\User;
                $user->Seq_Usuario  = $item['Seq_Usuario'];
                $user->Usuario      = $item['Usuario'];
                $user->Password     = $item['Password'];
                $user->Fecha_Registro = $item['Fecha_Registro'];
                $user->sys_rol_id     = $item['sys_rol_id'];
            }
        }

        return $user;
    }

    /**
     * Retorna un array con todos los usuarios registrados.
     *
     * @return array
     */
    public function getAllUsers()
    {
        $userDao = new \App\Models\Dao\UserDao;
        $result = $userDao->getAllUsers();
        
        $user   = null;
        $users = array();
        
        if(count($result) > 0) {

            foreach ($result as $item) {
                $user = new \App\Models\User;
                $user->Seq_Usuario  = $item['Seq_Usuario'];
                $user->Usuario      = $item['Usuario'];
                $user->Fecha_Registro = $item['Fecha_Registro'];
                $user->sys_rol_id     = $item['sys_rol_id'];

                array_push($users, $user);
            }
        }

        return $users;
    }

    /**
     * Se encarga de procesar la solicitud de creación de un
     * nuevo usuario.
     * 
     * Retorna un array con información del resultado de la solicitud.
     *
     * @param \App\Models\User $user
     * @return array
     */
    public function createUser(\App\Models\User $user)
    {
        // Creates a new password hash using a strong one-way hashing algorithm
        $user->Password = password_hash($user->Password, PASSWORD_DEFAULT);

        $userDao = new \App\Models\Dao\UserDao;
        $result = $userDao->create($user);
        
        if($result) {
            return [
                'status'  => 'success',
                'message' => 'Usuario creado satisfactoriamente!',
                'notification' => 'success'
            ];
        }

        return [
            'status'  => 'error',
            'message' => 'No se pudo crear el usuario.',
            'notification' => 'warning'
        ];
    }

    /**
     * Se encarga de procesar la solicitud de edición de un usuario,
     * validando los datos indicados.
     * 
     * Retorna un array con información del resultado de la solicitud.
     *
     * @param \App\Models\User $user
     * @return array
     */
    public function updateUser(\App\Models\User $user)
    {
        if(empty($user->Password)) { 

            $searchUser = $this->getUser($user->Seq_Usuario);
            $user->Password = $searchUser->Password;
        } else {
            // Creates a new password hash using a strong one-way hashing algorithm
            $user->Password = password_hash($user->Password, PASSWORD_DEFAULT);
        }

        $userDao = new \App\Models\Dao\UserDao;
        $result = $userDao->update($user);

        
        if($result) {
            return [
                'status'  => 'success',
                'message' => 'Usuario actualizado satisfactoriamente!',
                'notification' => 'success'
            ];
        }

        return [
            'status'  => 'error',
            'message' => 'No se pudo actualizar el usuario.',
            'notification' => 'warning'
        ];
    }

    /**
     * Se encarga de procesar la solicitud un usuario 
     * usuario registrado.
     * 
     * Retorna un array con información del resultado de la solicitud.
     *
     * @param \App\Models\User $user
     * @return array
     */
    public function deleteUser($id)
    {
        $userDao = new \App\Models\Dao\UserDao;
        $result = $userDao->delete($id);
        
        if($result) {
            return [
                'status'  => 'success',
                'message' => 'Usuario eliminado satisfactoriamente!',
                'notification' => 'success'
            ];
        }

        return [
            'status'  => 'error',
            'message' => 'No se pudo eliminar el usuario.',
            'notification' => 'warning'
        ];
    }
}