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
    echo "<br>";
    echo "<img src= 'https://viverbem.unimedbh.com.br/wp-content/uploads/2021/06/tabela-IMC.png' alt='Imagem de tabela dos IMCs' height='225' width='400'>"."<br>";
    echo "<a href=http://127.0.0.1/meu_site.com.br/20250821/imc.com.br/paginaimc.html>clique aqui para voltar à página inicial</a>";
?>