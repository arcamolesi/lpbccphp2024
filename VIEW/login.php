<?php 
   include_once 'C:\xampp\htdocs\lpbccphp2024\DAL\conexao.php';

    $usuario = trim($_POST['usuario']); 
    $senha = trim($_POST['senha']); 

   // echo "Usuario: " . $usuario . "</br>"; 
  //  echo "Senha: " . $senha . "</br>" . "</br>"; //Fema@2024

   // echo "Senha: " . md5($senha) . "</br>" . "</br>";  //059a1c70fb5d34c5dafe6a76c4f88847

   $sql = "Select * from usuario where usuario= ?;";
   $con = DAL\Conexao::conectar(); 
   $query = $con->prepare($sql);
   $query->execute ([$usuario]);
   $linha = $query->fetch(\PDO::FETCH_ASSOC);
   DAL\Conexao::desconectar(); 

    echo "Usuario: " . $linha['usuario'] . "</br>"; 
    echo "Senha banco: " . $linha['senha']. "</br>" . "</br>"; //Fema@2024
    echo "Senha digitada: " . $senha . "</br>" . "</br>";
    echo "Senha md5 digitada: " . md5($senha) . "</br>" . "</br>"; 


/*
 if(md5($senha) == $linha['senha']){
        session_start();
        $_SESSION['login'] =  $usuario;
        header("location:menu.php");
    }
    else header("location:index.php");
*/

?>