<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soma pares</title>
</head>

<?php
    $soma = 0;
    for ($i = 1; $i <= 100; $i++) {
            if ($i % 2 == 0) $soma += $i;
    }
    echo "Soma dos pares = $soma";
?>