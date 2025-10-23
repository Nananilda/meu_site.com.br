<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Sorteio de Rifa</h1>
    </header>

    <?php
    $arquivo = "vencedores.json";
    if (!file_exists($arquivo)){
        file_put_contents($arquivo, json_encode([]));
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST['nome'];
        $numero = $_POST['numero'];
        $premio = $_POST['premio'];
        $aleatorio = rand(0, 1000);
        $data = date("d/m/Y");
        $hora = date("H:i:s");
        $vencedores = json_decode(file_get_contents($arquivo), true);
        $jaGanhou = false;
        foreach ($vencedores as $v) {
            if ($v['nome'] === $nome){
                $jaGanhou = true;
                break;
            }
        }
    ?>

    <div id="resultado">
        <div id="destaque">
            <h2><?php echo htmlspecialchars($premio); ?></h2>
            <h1><?php echo $aleatorio; ?></h1>
            <h3><?php echo "$data - $hora"; ?></h3>
        </div>
        <div id="ganho">
            <?php
            if ($jaGanhou){
                echo "<p>$nome já ganhou antes e não pode participar novamente.</p>";
            } else{
                if ($numero == $aleatorio){
                    echo "<p>$nome! ganhou!</p>";
                    $vencedores[] = [
                        "nome" => $nome,
                        "numero" => $numero,
                        "premio" => $premio,
                        "data" => $data,
                        "hora" => $hora
                    ];
                    file_put_contents($arquivo, json_encode($vencedores, JSON_PRETTY_PRINT));
                } else{
                    echo "<p>não foi dessa vez, $nome.</p>";
                }
            }
            ?>
        </div>
        <div id="vencedores">
            <h2>vencedores</h2>

            <?php
            if (count($vencedores) > 0){
                echo "<ul>";
                foreach ($vencedores as $v) {
                    echo "<li>{$v['nome']} — Nº {$v['numero']} — {$v['premio']} ({$v['data']} às {$v['hora']})</li>";
                }
                echo "</ul>";
            } else{
                echo "<p>nenhum vencedor ainda.</p>";
            }
            ?>
        </div>
        <div id="voltar">
            <a href="sorteio.php">novo sorteio</a>
        </div>
    </div>

    <?php
    } else{
    ?>

    <div id="formulario">
        <form method="post">
            <label>nome:</label><br>
            <input type="text" name="nome" required><br><br>
            <label>número da rifa:</label><br>
            <input type="number" name="numero" required><br><br>
            <label>prêmio:</label><br>
            <input type="text" name="premio" required><br><br>
            <button type="submit">sortear</button>
            <p>sorteio de 0 a 1000</p>
        </form>
    </div>

    <?php
    }
    ?>

</body>
</html>