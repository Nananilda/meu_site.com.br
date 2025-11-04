<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de Rifa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    $nome = $_POST['nome'] ?? '';
    $numero = $_POST['numero'] ?? '';
    $premio = $_POST['premio'] ?? '';

    $arquivo_pessoas = fopen("pessoas.txt", "a");
    fwrite($arquivo_pessoas, "$nome | $numero\n");
    $arquivo_vencedores = fopen("vencedores.txt", "a");
    fwrite($arquivo_vencedores, "$ganhador | $numeroSorteado | $premio | $data | $hora\n");

    $numeroSorteado = rand(1, 300);
    date_default_timezone_set("America/Sao_Paulo");
    $data = date("d/m/Y");
    $hora = date("H:i:s");

    $vencedores = file($arquivo_vencedores);

    $jaganhou = [];
    foreach ($vencedores as $vencedoress){
        $partes = explode("|", $vencedoress);
        $jaganhou[] = $partes[0];
        // adiciona o valor do primeiro elemento do array $partes ao final do array $jaganhou
    }
    $ganhador = null;
    //ausencia de valor
    echo "<div id='resultado'>";
    echo "<h2>Resultado</h2>";
    echo "<p>prêmio: $premio</p>";
    echo "<h1>número sorteado: $numeroSorteado</h1>";
    echo "<p>$data - $hora</p>";
    if ($ganhador){
        echo "<p class='ganhou'>$ganhador ganhou o prêmio</p>";
        file_put_contents($arquivo_vencedores, "$ganhador | $numeroSorteado | $premio | $data | $hora\n");
    } else{
        echo "<p class='nao-ganhou'>nenhum ganhador encontrado</p>";
    }
    echo "</div>";

    echo "<div id='vencedores'><h2>Lista de Vencedores</h2>";
    $vencedores = file($arquivo_vencedores);
    //67 $vencedores = file($arquivo_vencedores, FILE_IGNORE_NEW_LINES);
    if (count($vencedores) > 0){
        //numero de elementos em um array
        echo "<ul>";
        foreach ($vencedores as $vencedoress) {
            list($nome, $num, $premio, $data, $hora) = explode("|", $vencedoress);
            echo "<li>$nome, N° $num, $premio ($data às $hora)</li>";
        }
        echo "</ul>";
    } else{
        echo "<p>nenhum vencedor até agora.</p>";
    }
    echo "</div>";
    echo "<div class='voltar'><a href='sorteio.php'>Novo Sorteio</a></div>";
    fclose($arquivo_pessoas);
    fclose($arquivo_vencedores);
?>
</body>
</html>