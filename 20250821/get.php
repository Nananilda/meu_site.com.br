<?php
    //echo $_GET['nome'];
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $sinal = $_GET['sinal'];
    $resultado = $valor1 . $sinal . $valor2;
    if($sinal == "*"){
        echo "<br>" . $resultado . " = " . $valor1 * $valor2;
    }
    else if($sinal == "+"){
        $soma = $valor1 + $valor2;
        echo "<br> $resultado = $soma";
    }
    else if($sinal == "-"){
        echo "<br>" . $resultado . " = " . $valor1 - $valor2;
    }
    else if($sinal == "/"){
        echo "<br>" . $resultado . " = " . $valor1 / $valor2;
    }
?>  