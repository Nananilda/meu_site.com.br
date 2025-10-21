<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada inversa</title>
</head>
<body>
    <form method="post" action="tabuada_inversa.php">
        tabuada do número: <br>
        <input type="number" name="n"><br>
        <input type="submit" href="tabuada_inversa.php"><br><br>
    </form>
</body>
</html>

<?php
    $n = intval($_POST['n']??'');
    for ($i = 10; $i >= 1; $i--){
        echo "$n x $i = " . ($n * $i) . "<br>";
    }
?>