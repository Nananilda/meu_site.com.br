<?php
    $numero = $_POST['numero'];
    $resto = $numero % 2;
    $resto = round($resto, 2);
    function parouimpar($num, $resto){
        if ($num % 2 == 0){
            echo "o número digitado ($num) é <strong>par!</strong> <br>";
            echo "* um número par é um número inteiro que é divisível por 2, ou seja, pode ser dividido em duas partes iguais sem deixar resto.";
        }else{
            echo "o número digitado é <strong>ímpar!</strong> <br>";
            echo "* um número ímpar é um número inteiro que não é divisível por 2, resultando em um resto quando dividido por 2 <br>";
            echo "o <strong>resto</strong> da divisão é do número $num é: $resto";
        }
    }
    echo parouimpar($numero, $resto);
?>