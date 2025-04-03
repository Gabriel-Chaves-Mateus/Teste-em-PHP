<?php
    if (isset($_POST['acao'])) {
    $nome = $_POST['txtnome'];
    $email = $_POST['txtemail'];
    $senha = $_POST['txtsenha'];

        if (isset($_POST['ckbfuma'])) 
            $fuma = '<br>Você fuma, cuidado que isso poderá te trazer problemas!!!';
        else
            $fuma = 'Parabéns, você não fuma';
            
        if (isset($_POST['ckbbebe'])) 
            $bebe = '<br>Você bebe, como está seu fígado?';
        else
            $bebe = 'Parabéns, você não bebe';

        if($bebe == 'Parabéns, você não bebe' && $fuma=='Parabéns, você não fuma')
            echo "Parabéns você é uma pessoa saudável!!<br>";
        else
        $bebe == 'Você bebe, como está seu fígado?' && $fuma=='Você fuma, cuidado que isso poderá te trazer problemas!!!';
            echo "Como você ainda está vivo?";

    echo $fuma;
    echo '<br>';
    echo $bebe;
    echo '<br>';

    echo "Seja bem vindo $nome, seu email é $email e sua senha é $senha";
    echo "<hr>";
    }
    
?>