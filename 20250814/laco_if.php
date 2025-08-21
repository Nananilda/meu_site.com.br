<?php   
    $resposta = 'não';
    $pergunta = 'sua mãe deixou você ir no mcdonalds';
    if ($resposta == 'sim'){
        echo 'já estou lá';
    }else{
        echo 'larga mão';
    };
    echo '<br>';
    echo '----------------------------------------------------------<br>';
    $numero1 = 100;
    $numero2 = 200;
    if ($numero1 > $numero2){
        echo 'o número1 ' . '(' . $numero1 . ') ' . 'é maior que o número2'. ' (' . $numero2 . ')';
    }
    if ($numero1 < $numero2) {
        echo 'o número2 ' . '(' . $numero2 . ') ' . 'é maior que o número1'. ' (' . $numero1 . ')';
    }else {
        echo 'o número1 ' . '(' . $numero1 . ') ' . 'é igual o número2'. ' (' . $numero2 . ')';
    };
    echo '----------------------------------------------------------<br>';
?>