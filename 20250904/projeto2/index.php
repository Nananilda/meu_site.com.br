<h1>Bem-vindo à página de login</h1>
<div style="border: 2px solid; width: 200px; padding: 10px; left: 20px;">
    <form action="login.php" method="post">
        <strong>Login </strong><br>
        <input type="text" name="usuario"> <br>
        <strong>Senha </strong><br>
        <input type="password" name="senha"> <br><br>
        <input type="submit" value="entrar">
    </form>
</div>
<?php
//exibe mensagem de erro, se existir
    if (isset($_GET['msg'])){
        echo "<p style='color:red'>" . htmlspecialchars($_GET['msg']) . "</p>";
    }
?>
