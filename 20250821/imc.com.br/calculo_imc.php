<?php
    $nome = $_POST['nome'];
    $idade= $_POST['idade'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $imc = $peso/($altura*$altura);
    $imc = round($imc,2);
    echo "$nome, você está com $idade anos e seu IMC é: $imc";
    if($imc < 18.5){
        echo "<br>$nome está com baixo peso!";
    }
    else if($imc >= 18.5 and $imc <24.99){
        echo "<br>$nome está com peso normal!";
    }
    else if($imc >= 25 and $imc < 29.99){
        echo "<br>$nome está com sobrepeso!";
    }
    else if($imc > 30){
        echo "<br>$nome está obeso(a)";
    }
?>