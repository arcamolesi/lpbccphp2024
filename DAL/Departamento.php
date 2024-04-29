<?php
namespace DAL; //Data Access Layer
include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\conexao.php';
include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\Departamento.php';


class Departamento
{
      public function Select()
   {
      $sql = "Select * from departamento;";
      $con = Conexao::conectar();
      $registros = $con->query($sql);
      $con = Conexao::desconectar();

      foreach ($registros as $linha) {
         $dpto = new \MODEL\Departamento();

         $dpto->setId($linha['id']);
         $dpto->setDescricao($linha['descricao']);

         $lstDpto[] = $dpto;
      }

      return $lstDpto;
   }


}

?>