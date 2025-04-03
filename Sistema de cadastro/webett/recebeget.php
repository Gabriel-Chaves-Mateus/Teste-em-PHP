<?php
    if (isset($_GET['acao'])) {
    $nome = $_GET['txtnome'];
    $email = $_GET['txtemail'];
    $senha = $_GET['txtsenha'];

    echo "Seja bem vindo $nome, seu email é $email e sua senha é $senha";
    echo "<hr>";
    }
    
?>