<?php
    $pessoa = ["nome" => "João", "idade" => 30];
    echo $pessoa["nome"] . "<br>";
    echo "-----------------------------------------------------<br>";
    $aluno = ["nome2" => "lata", "idade2" => 16, "nota" => 10];
    echo "oioii " . $aluno["nome2"] . " você tem " . $aluno["idade2"] . " anos, e sua nota é " . $aluno["nota"] . "<br>";
    echo "( " . $aluno["nome2"] . " / " . $aluno["idade2"] . " / " . $aluno["nota"] . " )<br>";
    echo "-----------------------------------------------------<br>";
    $anoatual = date('Y');
    $ano = $anoatual - $aluno["idade2"];
    echo "você nasceu em " . $ano ."<br>";
    echo "-----------------------------------------------------<br>";
    $data = date("j/m/Y");
    $hoje = date('j');
    $hora = date("g:i:s");
    echo "hoje é dia " . $data . "<br>";
    echo "hoje dia " . $hoje . " é o Dia Mundial da Segurança e Saúde no Trabalho<br>";
    echo "agora são extamente " . $hora;
?>
