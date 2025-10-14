<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>busca em vetor</title>
</head>

<?php
    $numeros = [7, 2, 10, 4, 6];
    $soma = 0;
    $maior = $numeros[0];
    $menor = $numeros[0];
    $quantidade = 0;
    foreach($numeros as $n){
        $soma += $n;
        $quantidade++;
        if ($n > $maior){
            $maior = $n;
        }
        if ($n < $menor){
            $menor = $n;
        }
    }
    $media = $soma/$quantidade;
    echo "soma = $soma, média = $media, maior = $maior, menor = $menor";
    // array_sum e max/min
?>