<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>busca em vetor</title>
</head>
<body>
    <form action="busca_em_vetor.php" method="post">
        <label>Valor:</label>
        <p><input type="number" name="busca" required></p>
        <br>
    <button type='submit'>buscar</button>
</body>
</html>

<?php
    $busca = intval($_POST['busca']??'');
    $vetor = [4, 8, 15, 16, 23, 43, 50, 86, 93, 100];
    $achou = false;
    foreach ($vetor as $i => $valor){
        // foreach verifica se ambos os lados são verdadeiros, e independentemente realiza a ação
        if ($valor == $busca){
            $real = $i+1;
            echo "número encontrado na posição $real";
            $achou = true;
            break;
        }
    }
    if (!$achou) echo "número não encontardo";

?>