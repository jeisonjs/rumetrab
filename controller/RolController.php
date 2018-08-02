<?php

namespace App\Controllers;


class RolController
{

    /**
     * Retorna un Rol según su id.
     *
     * @param string $key - Parametro para usar en la busqueda.
     * @return \App\Models\Rol
     */
    public function getRol($key)
    {
        $rolDao = new \App\Models\Dao\RolDao;
        $result = $rolDao->read($key);
        
        $rol = null;
        
        if(count($result) == 1) {

            foreach ($result as $item) {
                $rol              = new \App\Models\Rol;
                $rol->Seq_Rol     = $item['Seq_Rol'];
                $rol->Funcion     = $item['Funcion'];
                $rol->Descripcion = $item['Descripcion'];
            }
        }

        return $rol;
    }

    /**
     * Retorna un array con todos los roles registrados.
     *
     * @return array
     */
    public function getAllRoles()
    {
        $rolDao = new \App\Models\Dao\RolDao;
        $result = $rolDao->getAllRoles();
        
        $rol   = null;
        $roles = array();
        
        if(count($result) > 0) {

            foreach ($result as $item) {
                $rol = new \App\Models\Rol;
                $rol->Seq_Rol  = $item['Seq_Rol'];
                $rol->Funcion  = $item['Funcion'];
                $rol->Descripcion = $item['Descripcion'];

                array_push($roles, $rol);
            }
        }

        return $roles;
    }
}