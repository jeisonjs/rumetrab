<?php

namespace App\Controllers;


class RegisterController
{
    public function getRegister($register_id)
    {
        $registro = new \Registro();
        $result = $registro->Obtener($register_id) ;

        header("Content-Type: application/json; charset=UTF-8");
        echo json_encode($result); die();
    }
}