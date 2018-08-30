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

    public function registerSessionStart()
    {
        // id del usuario actual.
        $usuario_id = \App\Controller\Auth\Auth::user()->Seq_Usuario;

        $userDao = new \App\Models\Dao\UserDao;
        $result  = $userDao->registerSessionStart($usuario_id);
    }

    public function registerSessionFinish()
    {
        // id del usuario actual.
        $usuario_id = \App\Controller\Auth\Auth::user()->Seq_Usuario;

        $userDao    = new \App\Models\Dao\UserDao;
        $session_id = $userDao->getLastLogin($usuario_id);
        $result     = $userDao->registerSessionFinish($session_id[0]['id']);
    }

    public function getUsage($usuario_id)
    {
        $session_data = $this->getLastLogin($usuario_id);
        $fechaInicio  = new \DateTime($session_data['session_start']);
        $fechaFin     = new \DateTime($session_data['session_finish']);

        return $fechaInicio->format("M j, Y, g:i a") .' - '. $fechaFin->format("M j, Y, g:i a");
    }

    public function getActivity($usuario_id)
    {
        $session_data = $this->getLastLogin($usuario_id);
        $fechaInicio  = new \DateTime($session_data['session_start']);
        $fechaFin     = new \DateTime($session_data['session_finish']);
        $activity     = $fechaInicio->diff($fechaFin);

        return $activity->format("%H:%I:%S");
    }

    public function getLastLogin($usuario_id)
    {
        $userDao      = new \App\Models\Dao\UserDao;
        $session_data = $userDao->getLastLogin($usuario_id);

        if (empty($session_data)) {
            return [
                'session_start'  => date("M j, Y, g:i a"),
                'session_finish' => date("M j, Y, g:i a")
            ];
        } else {
            return $session_data[0];
        }
    }
}