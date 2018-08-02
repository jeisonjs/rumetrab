<?php

namespace App\Models;

/**
 * @property integer         Seq_Usuario
 * @property string          Usuario
 * @property string          Password
 * @property date            Fecha_Registro
 * @property integer         Persona_Seq
 * @property integer         Departamento_Seq
 * @property \App\Models\Rol sys_rol_id
 */
class User
{
    public $Seq_Usuario;
    public $Usuario;
    public $Fecha_Registro;
    public $Password;
    public $sys_rol_id;
  

    /**
     * Obtiene un rol según un id dado.
     * 
     * Uso: $user = new \App\Models\User;
     *      $rolName = $user->rol(1)->Funcion;
     *
     * @param int $id - Identidicador del rol en la base de datos.
     * @return \App\Models\Rol
     */
    public static function rol($id)
    {
        $rolController = new \App\Controllers\RolController;
        $rol = $rolController->getRol($id);

        return $rol;
    }
}