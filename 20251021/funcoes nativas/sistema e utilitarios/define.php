<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minuscula</title>
</head>
<body>
    <form method="post">
        <label>nome da variável:</label>
        <p><input type="text" name="nome" required></p>
        <label>conteudo da variável:</label>
        <p><input type="text" name="conteudo" required></p>
        <br>
    <button type='submit'>enviar</button>
</body>
</html>

<?php
    $nome_variavel = $_POST['nome']??'';
    $conteudo_variavel = $_POST['conteudo']??'';
    // criando uma constante global chamada nome
    define($nome_variavel, $conteudo_variavel);
    echo "o nome é " . $nome_variavel; 
?>