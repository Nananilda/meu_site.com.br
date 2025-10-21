<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteio</title>
</head>
<body>
    <header>
        <h1>Sorteio</h1>
    </header>
    <div id="div1">
        <form method="post">
            <br>
            <label>Digite qual o prêmio:</label>
            <input type="text" name="premio" required>
            <br><br>
            <label>Digite qual o número da sua rifa:</label>
            <input type="number" name="numero" required>
            <br>
            <button type="submit">sortear</button>
            <p id="p1">sorteio de 0 a 1000</p>
        </form>
    </div>
</body>
</html>

<div id="div2">
    <div id="div3">
        <?php
            $premio = $_POST['premio']??'';
            $aleatorio = rand(0, 1000);
            echo $premio . "<br>";
            echo $aleatorio;
        ?>
    </div>
    <div id="div4">
        <?php
            echo date("d/m/Y") . "<br>";
            echo date("H:i:s");
        ?>
    </div>
    <div id="div5">
        <?php
           $numero = $_POST['numero']??'';
           if ($numero == $aleatorio){
            echo "você ganhou a rifa!";
           } else{
            echo "você não ganhou a rifa";
           }
        ?>
    </div>
</div>

<!-- quem ganhou o prêmio não pode ganhar novamente -->
<!-- listar quem já ganhou em baixo -->