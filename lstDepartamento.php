<?php
    include 'conexao.php';
    $sql = "select * from departamento;";
    $con = Conexao::conectar(); 
    $registros = $con->query($sql); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Departamentos</title>
</head>
<body>
    <h1>Listar Departamentos</h1> 
    <table>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
        </tr>
        
        <?php foreach($registros as $linha) {?>
           <tr>
              <td> <?php echo $linha['id']; ?> </td>
              <td> <?php echo $linha['descricao']?> </td>
           </tr>
        <?php } ?>
    </table>
    
</body>
</html>