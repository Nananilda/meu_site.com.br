<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindromo</title>
</head>
<body>
    <form method="post" action="palindromo.php">
        <label for="num1">escreva uma palavra:</label>
        <input type="text" id="palavra" name="palavra">
        <br><br>
        <input type="submit">
        <br><br>
    </form>

<?php
    $palavra = $_POST['palavra'];
    if ($palavra == strrev($palavra)){
        echo "$palavra é um palíndromo";
    } else {
        echo "$palavra não é um palíndromo";
    }
?>