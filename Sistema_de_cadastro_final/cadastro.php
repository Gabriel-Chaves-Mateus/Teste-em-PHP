<?php 
    include 'MySql.php';
    if (isset($_POST['acao'])){
    $nome = $_POST['Nome'];
    $sobrenome = $_POST['Sobrenome'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    $sql = $pdo->prepare('INSERT INTO cadastro(codigo,Nome,Sobrenome,Email,Senha) value (null,?,?,?,?)');

    if ($sql->execute(array($nome,$sobrenome,$email,$senha))){
        echo 'Dados cadastrados com sucesso';
        header('location:lista.php');
    }   else {
        echo 'Erro ao cadastrar!!';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div id="fundo-externo">
        <div id="fundo">
            <img src="imagens/fundo.jpg">
        </div>
    </div>
    <div id="site-Cad">
        <h1>Cadastrar</h1>
        <form action="" method="POST">
            <input type="text" name="Nome" placeholder="Nome:" maxlength="15" required>
            <input type="text" name="Sobrenome" placeholder="Sobrenome:" maxlength="30" required>
            <input type="email" name="Email" placeholder="Email:" maxlength="40" required>
            <input type="password" name="Senha" placeholder="Senha:" maxlength="15" required>
            <input type="password" name="confsenha" placeholder="Confirmar Senha:" maxlength="15" required>
            <input type="submit" name="acao" value="Cadastrar">
        </form>
    </div>
</body>
</html>