<?php

namespace App\Controller\Auth;

/**
 * Clase encargada de ofrecer metodos necesarios para la
 * validación de la sesión y el usuario actual.
 */
abstract class Auth
{
    /**
     * Retorna una nueva instancia de la clase User con los datos
     * del usuario que ha iniciado sesión.
     * 
     * Use: \App\Controller\AuthAuth::user()->Seq_Usuario
     *
     * @return \App\Models\User
     */
    public function user()
    {
        $currentUser = $_SESSION['Usuario'];
        
        $userController = new \App\Controllers\UserController;
        $user = $userController->getUser($currentUser, \App\Controllers\UserController::BY_NAME);

        return $user;
    }

    /**
     * Validar si el usuario que intenta acceder directamente a las
     * vistas php haya iniciado sesión.
     * De lo contrario lo lleva al formulario de login.
     *
     * @return void
     */
    public function validarSesion()
    {
        if($_SESSION['authenticated'] != true) {
            session_write_close();
            header('Location: ./');
        }
    }
}