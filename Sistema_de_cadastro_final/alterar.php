<?php
    include 'MySql.php';
    $codigo = null;
    $nome   = null;
    $sobrenome  = null;
    $email  = null;
    $senha = null;
    
    if (isset($_GET['codigo'])){
        $codigo=$_GET['codigo'];
        $sql = $pdo->prepare("SELECT * FROM cadastro WHERE codigo = $codigo");
        if ($sql->execute()){
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach($info as $key => $value){
                $codigo=$value['codigo'];
                $nome=$value['Nome'];
                $sobrenome=$value['Sobrenome'];
                $email=$value['Email'];
                $senha=$value['Senha'];
            }
        }        
    }

    if (isset($_POST['acao'])){
        $codigo=$_POST['codigo'];
        $nome = $_POST['Nome'];
        $sobrenome = $_POST['Sobrenome'];
        $email= $_POST['Email'];
        $senha= $_POST['Senha'];
        $sql = $pdo->prepare('UPDATE cadastro SET Nome=?,Sobrenome=?,Email=?,Senha=?
                              WHERE codigo=?');

    if ($sql->execute(array($nome,$sobrenome,$email,$senha,$codigo))){
        echo 'Dados alterados com sucesso';
        header('location:lista.php'); 
    } else {
        echo 'Erro ao alterar dados!!';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Usuário</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div id="fundo-externo">
        <div id="fundo">
            <img src="imagens/fundo.jpg">
    </div>
    </div>
    <div id="site">
    <form action="" method="POST">
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" value="<?php echo $codigo ?>" required><br>
        <label for="Nome">Nome:</label>
        <input type="text" name="Nome" value="<?php echo $nome ?>" required><br>
        <label for="Sobrenome">Sobrenome:</label>
        <input type="text" name="Sobrenome" value="<?php echo $sobrenome ?>" required><br>
        <label for="Email">Email:</label>
        <input type="email" name="Email" value="<?php echo $email ?>" required><br>
        <label for="Senha">Senha:</label>
        <input type="password" name="Senha" value="<?php echo $idade ?>" required><br>
        <input type="submit" name="acao" value="Alterar">
    </form>
    </div>
</body>
</html>