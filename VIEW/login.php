<?php 
    $usuario = trim($_POST['usuario']); 
    $senha = trim($_POST['senha']); 

   // echo "Usuario: " . $usuario . "</br>"; 
  //  echo "Senha: " . $senha . "</br>" . "</br>"; //Fema@2024

   // echo "Senha: " . md5($senha) . "</br>" . "</br>";  //059a1c70fb5d34c5dafe6a76c4f88847

   if(md5($senha) == md5("Fema@2024")){
        session_start();
        $_SESSION['login'] =  $usuario;
        header("location:menu.php");
    }
    else header("location:index.php");

?>