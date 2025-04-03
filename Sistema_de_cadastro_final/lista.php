<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div id="fundo-externo">
        <div id="fundo">
            <img src="imagens/fundo.jpg">
        </div>
    </div>
    <div id="site">

    
    <?php 
    include 'MySql.php';

    $sql = $pdo->prepare('SELECT * FROM cadastro');
    if ($sql->execute()){
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);

        echo "<table border='1'>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Alterar</th>
                <th>Excluir</th>";
        echo "<tbody>";
    foreach ($info as $key => $value) {
        echo "<tr><td>".$value['codigo']."</td>";
        echo "<td>".$value['Nome']."</td>";
        echo "<td>".$value['Sobrenome']."</td>";
        echo "<td>".$value['Email']."</td>";
        echo "<td>".$value['Senha']."</td>";
        echo "<td><center><a href='alterar.php?codigo=".$value['codigo']."'>(+)</a></center></td>";
        echo "<td><center><a href='deleta.php?codigo=".$value['codigo']."'>(-)</a></center></td></tr>";
    }
    echo "</tbody>";
    echo "</table>";


    }
    ?>

    </div>
</body>
</html>