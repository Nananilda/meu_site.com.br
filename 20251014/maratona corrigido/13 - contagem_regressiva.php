<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cotagem regressiva</title>
</head>
<body>
    <form method="post" action="contagem_regressiva.php">
        contagem regressiva do número: <br>
        <input type="number" name="n"><br>
        <input type="submit" href="contagem_regressiva.php"><br><br>
    </form>
</body>
</html>

<?php
    $n = intval($_POST['n']);
    while ($n >= 0) {
        echo "$n<br>";
    $n--;
    }
?>