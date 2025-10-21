<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palíndromo</title>
</head>
<body>
    <form method="post">
        <label>digite uma palavra:</label>
        <p><input type="text" name="texto" required></p>
        <br>
    <button type='submit'>enviar</button>
</body>
</html>

<?php
    $texto = $_POST['texto']??'';
    $texto_invertido = strrev($texto);
    echo "seu nome invertido é: $texto_invertido <br>"; // inverte o texto
    if ($texto = $texto_invertido){
        echo "seu texto é uma palavra palíndromo";
    } else{
        echo "seu texto não é uma palavra palíndromo";
    }
?>