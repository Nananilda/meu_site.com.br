<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minuscula</title>
</head>
<body>
    <form method="post">
        <label>digite um número:</label>
        <p><input type="number" name="nome" required></p>
        <br>
    <button type='submit'>enviar</button>
</body>
</html>

<?php
    $umero = $_POST['nome']??'';
    if (empty($umero)){
        echo "a variável está vazia";
    } else {
        echo "a variável tem valor";
    }
?>