<?php

namespace App\Models;


class Departamento
{
    public $Seq_Departamento;
    public $Nombre;
}

class Provincia
{
    public $id;
    public $nombre;
    public $departamento;
}

class Municipio
{
    public $Seq_Municipio;
    public $Nombre;
    public $Provincia_Seq;
}
