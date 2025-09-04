<?php
    $nome = $_POST['nome'];
    $nnotas = $_POST['nnotas'];
    $snotas = $_POST['snotas'];
    $media = $snotas / $nnotas;
    $media = round($media,2);
    $materia = $_POST['materia'];
    if ($media >= 7){
        echo "o(a) aluno(a) $nome está aprovado na disciplina $materia! (média: $media)<br>";
    } else if ($media >= 5 and $media < 7){
        echo "o(a) aluno(a) $nome está de recuperação na disciplina $materia (média: $media)<br>";
    } else if ($media >= 0 and $media <5){
        echo "O(a) aluno(a) $nome está <strong style='color: red'>reprovado</strong> disciplina $materia (média: $media)<br>";
    } else {
        echo "média/nota inválida<br>";
    }
    echo "<br><strong>Como calcular média?</strong><br>";
    echo "<ul>";
    echo "<li><strong>some todos os valores</strong> do conjunto de dados</li>";
    echo "<li><strong>conte o número total</strong> de elementos no conjunto</li>";
    echo "<li><strong>divida a soma</strong> pelo número total de elementos</li>";
    echo "</ul>";
?>
