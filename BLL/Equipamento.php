<?php
namespace BLL;
include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\Equipamento.php';
use DAL;

class Equipamento
{
    public function Select()
    {  
        $dalEqpto = new \DAL\Equipamento();
        ///regras de negócios
        return $dalEqpto->Select();
    }

    public function Insert(\MODEL\Equipamento $equipamento){
        $dalEqpto = new \DAL\Equipamento();

        $result = $dalEqpto->Insert($equipamento);

        return $result;
       
        
    }

}
?>