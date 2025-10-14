<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inverter string</title>
</head>
<body>
    <form method="post" action="invernter_string.php">
        escreva a palavra para ser invertida: <br>
        <input type="text" name="t"><br>
        <input type="submit" href="invernter_string.php"><br><br>
    </form>
</body>
</html>

<?php
    $t = intval($_POST['t']);
    echo strrev($t);
    // strrev = função nativa, inverte a palavra
?>