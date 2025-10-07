<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <h1>os 10 primeiros números da sequencia de fibonacci</h1>
    </form>
</body>
</html>

<?php
    $n1 = 1;
    $n2 = 2;
    $n = 0;
    echo "o 1° termo da sequencia: $n1 <br>";
    echo "o 2° termo da sequência: $n2 <br>";
    for($i = 3;  $i <= 10; $i++){
        $n3 = $n2 + $n1;
        $n1 = $n2;
        $n2 = $n3;
        echo "o $i ° termo da sequência é: $n3 <br>";
    }
?>
