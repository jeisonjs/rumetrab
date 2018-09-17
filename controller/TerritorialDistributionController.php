<?php

namespace App\Controllers;


class TerritorialDistributionController
{
    public function getAllDepartaments() 
    {
        $TerritorialDistributionDao = new \App\Models\Dao\TerritorialDistributionDao;
        $result = $TerritorialDistributionDao->getAllDepartaments();

        $departament  = null;
        $departaments = array();
        
        if(count($result) > 0) {

            foreach ($result as $item) {
                $departament = new \App\Models\Departamento;
                $departament->Seq_Departamento = $item['id'];
                $departament->Nombre           = $item['name'];

                array_push($departaments, $departament);
            }
        }

        return $departaments;
    }

    public function getProvinceByDepartament($departamento_id) 
    {
        $TerritorialDistributionDao = new \App\Models\Dao\TerritorialDistributionDao;
        $result = $TerritorialDistributionDao->getProvinceByDepartament($departamento_id);

        $province  = null;
        $provinces = array();
        
        if(count($result) > 0) {

            foreach ($result as $item) {
                $province = new \App\Models\Provincia;
                $province->id           = $item['id'];
                $province->nombre       = $item['name'];
                $province->departamento = $item['departamento_id'];

                array_push($provinces, $province);
            }
        }

        return $provinces;
    }
    public function getMunicipioByProvince($provincia_id)
    {
        $TerritorialDistributionDao = new \App\Models\Dao\TerritorialDistributionDao;
        $result = $TerritorialDistributionDao->getMunicipioByProvince($provincia_id);

        $municipio  = null;
        $municipios = array();
        
        if(count($result) > 0) {

            foreach ($result as $item) {
                $municipio = new \App\Models\Municipio;
                $municipio->Seq_Municipio = $item['id'];
                $municipio->Nombre        = $item['name'];
                $municipio->Provincia_Seq = $item['provincia_id'];

                array_push($municipios, $municipio);
            }
        }

        return $municipios;
    }


    public function showAllDepartaments()
    {
        $TerritorialDistributionDao = new \App\Models\Dao\TerritorialDistributionDao;
        $result = $TerritorialDistributionDao->getAllDepartaments();

        foreach ($result as $item) {
            echo "<option value=".$item['id'].">".$item['name']."</option>";
        }
    }
}

