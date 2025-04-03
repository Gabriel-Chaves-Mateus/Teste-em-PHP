<?php
    include ('conexao.php');

    if(empty($_POST['Email']) || empty($_POST['Senha'])){
        header('Location: login.php');
        exit();
    }

    $email = mysqli_real_escape_string($conexao, $_POST['Email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['Senha']);
    $query = "select codigo, Email from cadastro where Email = '{$email}' and Senha = md5('{$senha}')";

    $result = mysqli_query($conexao, $query);
    
    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['Email'] = $email;
        header('Location: lista.php');
        exit();
    }else {
        header('Location: login.php');
        exit();
    }

?>