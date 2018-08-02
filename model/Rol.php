<?php

namespace App\Models;

/**
 * @property integer Seq_Rol
 * @property string  Funcion
 * @property string  Descripcion
 */
class Rol
{
    const ADMINISTRADOR = 1;
    const SUPERVISOR = 2; // Reporteador?
    const USUARIO = 3; // Operador?

    public $Seq_Rol;
    public $Funcion;
    public $Descripcion;
}