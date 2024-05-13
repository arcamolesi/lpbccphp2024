<?php
  include_once 'C:\xampp\htdocs\lpbccphp2024\MODEL\Equipamento.php'; 
  include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\Equipamento.php';

  $eqpto = new \MODEL\Equipamento();
  $eqpto->setDescricao($_POST['txtDesc']); 
  $eqpto->setResponsavel($_POST['txtResp']); 
  $eqpto->setDepartamento($_POST['txtDep']); 
  $eqpto->setCompra($_POST['txtCompra']);

  $bllEqpto = new \BLL\Equipamento(); 
  
  $result = $bllEqpto->Insert($eqpto);
  
  if ($result->errorCode() === '00000') {
    header("location: lstEquipamento.php");
  }
  else echo $result->errorInfo();

?>