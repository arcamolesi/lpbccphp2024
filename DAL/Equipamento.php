<?php
namespace DAL;

include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\Conexao.php';
include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\Equipamento.php';

class Equipamento
{
    public function Select()
    {
        $sql = "Select * from equipamento;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($registros as $linha) {
            $eqpto = new \MODEL\Equipamento();

            $eqpto->setId($linha['id']);
            $eqpto->setDescricao($linha['descricao']);
            $eqpto->setResponsavel($linha['responsavel']);
            $eqpto->setDepartamento($linha['departamento']);
            $eqpto->setCompra($linha['compra']);

            $lstEqpto[] = $eqpto;
        }

        return $lstEqpto;
    }

    public function Insert(\MODEL\Equipamento $equipamento){
        $sql = "INSERT INTO equipamento (descricao, responsavel, departamento, compra) VALUES ('{$equipamento->getDescricao()}', '{$equipamento->getResponsavel()}', '{$equipamento->getDepartamento()}', '{$equipamento->getCompra()}');";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();
        return $result;

        //echo "Descricao: " . $equipamento->getDescricao() . "<br/><br/>";
       // echo "Responsável: " . $equipamento->getResponsavel() . "<br/><br/>";
    }


}

?>