<?php
    // if (isset($_GET['acao'])) {
    // $nome = $_GET['txtnome'];
    // $email = $_GET['txtemail'];
    // $senha = $_GET['txtsenha'];

    // echo "Seja bem vindo $nome, seu email é $email e sua senha é $senha";
    // echo "<hr>";
    // }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <h1>Cadastro</h1>
        <form action="recebepost.php" method="POST">
            Nome: <input type="text" name="txtnome" required><br>
            Email: <input type="email" name="txtemail" required><br>
            Senha: <input type="password" name="txtsenha" required><br>

            <br>
            <input type="checkbox" name="ckbfuma">Fuma
            <input type="checkbox" name="ckbbebe">Bebe
            <br>

            <input type="submit" name="acao" value="Cadastrar">
        </form>
</body>
</html>