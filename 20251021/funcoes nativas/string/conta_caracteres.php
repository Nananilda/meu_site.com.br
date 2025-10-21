<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conta caracteres</title>
</head>
<body>
    <form method="post">
        <label>digite a frase:</label>
        <p><input type="text" name="txt" required></p>
        <br>
    <button type='submit'>contar</button>
</body>
</html>

<?php
    $txt = $_POST['a']??'';
    echo "a frase '$txt' tem: " . strlen($txt) . " caracteres";
?>