<form method="post" action="conversao.php">
    número nem celsius: <br>
    <input type="text" name="c"><br>
    <input type="submit" href="conversao.php"><br><br>
</form>
<?php
    $c = $_POST['c'];
    $f = ($c*1.8)+32;
    echo $f;
?>