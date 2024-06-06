<?php 

$usuario = trim($_POST['usuario']); 
$senha = trim($_POST['senha']); 

echo "Usuario: " . $usuario . "</br>"; 
echo "Senha: " . $senha . "</br>" . "</br>"; //Fema@2024

 echo "Senha: " . md5($senha) . "</br>" . "</br>";  
 
 //059a1c70fb5d34c5dafe6a76c4f88847

?>
