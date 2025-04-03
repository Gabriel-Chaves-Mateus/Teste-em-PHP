<?php
    $nome = 'Gabriel Chaves Mateus';
    $vetor = ['Marcelo','Joao','Gabriel','Amanda'];
    $cidades = array('Joinville','Curitiba','Araquari','Florianópolis');

    for ($i=0; $i<count($cidades); $i++) {
        echo "[$i]Olá mundo, $cidades[$i]";
        echo '<br>';
    }

    echo '<br>';

    print "<font size='20px' color='red'>Mensagem com print </font>";

    echo '<br>';

    // echo '<pre>';
    // print_r($cidades);
    // echo '</pre>';

    // echo '<br>';
    // for ($i=0; $i<5; $i++) {
    //     echo "[$i]Olá mundo, $nome";
    //     echo '<br>';
    // }

    // echo '<br>';
    // for ($i=0; $i<5; $i++) {
    //     echo "[$i]Olá mundo, $vetor[$i]";
    //     echo '<br>';
    // }

    // echo '<br>';
    // echo "<h1>Olá mundo, $nome</h1>";
?>