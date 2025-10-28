<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de Rifa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Sorteio de Rifa</h1>
    </header>
    <div id="cadastro">
        <h2>Cadastrar participante</h2>
        <form method="post" action="resultado.php">
            <label>Nome:</label>
            <input type="text" name="nome" required>
            <label>Número da Rifa:</label>
            <input type="number" name="numero" required>
            <h2>Cadastrar prêmio</h2>
            <label>Prêmio:</label>
            <input type="text" name="premio" required>
            <button type="submit" name="sortear">Sortear</button>
        </form>
    </div>
</body>
</html>