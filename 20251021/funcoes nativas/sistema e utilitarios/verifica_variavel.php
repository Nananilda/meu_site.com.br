<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minuscula</title>
</head>
<body>
    <form method="post">
        <label>digite uma palavra:</label>
        <p><input type="text" name="nome" required></p>
        <br>
    <button type='submit'>enviar</button>
</body>
</html>

<?php
    $nome = $_POST['nome']??'';
    if (isset($nome)){
        echo "a variável existe";
    } else {
        echo "a variável não existe";
    }
?>