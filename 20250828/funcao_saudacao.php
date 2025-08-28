<?php
    //está é uma função
    function saudacao($nome){
    return "Olá, $nome";
    }
    echo saudacao("Lara <br>");
    echo "---------------------";
    //Definição de função
    function nomeDaFuncao($parametro1, $parametro2){
        //código que será executado
        $resultado = $parametro1 + $parametro2;
        return $resultado;
    }
    $soma = nomeDaFuncao(5, 10);
    echo " O resultado é: " . $soma;
?>

