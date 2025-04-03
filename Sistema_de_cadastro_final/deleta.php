<?php 
    include 'MySql.php';

    if(isset($_GET['codigo'])){
        $codigo = $_GET['codigo'];

        $sql = $pdo->prepare('DELETE FROM cadastro WHERE codigo = ?');
        if ($sql->execute(array($codigo))){
            echo 'Dados excluídos com sucesso';
            header('location:lista.php');
        }   else {
            echo 'Erro ao excluir!!';
        }      
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Deletar</title>
</head>
<body>
    <form action="" method="POST">
        <label for="codigo">Código:</label>
        <input type="text" name="codigo">
        <input type="submit" name="acao" value="Excluir">
    </form>
</html>