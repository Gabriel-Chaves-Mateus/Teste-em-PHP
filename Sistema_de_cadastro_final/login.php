<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div id="fundo-externo">
        <div id="fundo">
            <img src="imagens/fundo.jpg">
        </div>
    </div>
    <div id="site">
        <h1>Login</h1>
        <br>
            <form action="sessao.php" method="POST">
                    <input type="email" name="Email" placeholder="Email" required>
                    <input type="password" name="Senha" id="Senha" placeholder="Senha" required>
                    <input type="submit" name="acao" value="Entrar">
                    <a href="cadastro.php">Ainda não tem uma conta? <strong>Cadastre-se aqui!</strong></a>
            </form>
    </div>
</body>
</html>