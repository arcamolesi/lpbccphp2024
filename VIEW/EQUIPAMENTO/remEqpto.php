<?php 
    namespace VIEW\Equipamento;
    include_once 'C:\xampp\htdocs\lpbccphp2024\BLL\Equipamento.php'; 

    $id = $_GET['id'];

    $bllEqpto = new \BLL\Equipamento(); 
    $result =  $bllEqpto->Delete($id);  
  
    header("location: lstEquipamento.php");


?>