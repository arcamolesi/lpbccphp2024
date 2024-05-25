<?php
namespace BLL;

include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\Departamento.php';
use DAL;

class Departamento
{
    public function Select()
    {
        $dalDpto = new \DAL\Departamento();
    
        return $dalDpto->Select();
    }
}

?>