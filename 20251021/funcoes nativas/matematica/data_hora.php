<?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "Data atual tipo 1: " . date("d/m/Y") . "<br>";
    echo "Data atual tipo 2: " . date("d/m/y") . "<br>";
    echo "Hora atual: " . date("H:i:s") . "<br>";
    echo "Daqui a 7 dias: " . date("d/m/Y", strtotime("+7 days")) . "<br>";
    echo "Daqui a 1 semana: " . date("d/m/Y", strtotime("+1 week"));
    echo "<hr>";
    $hoje = new DateTime('');

    $natal = new DateTime('2025-12-25');
    $intervalo = $hoje -> diff($natal);
    echo "faltam " . $intervalo -> days . " dias para o natal";

    echo "<hr>";
    $anonovo = new DateTime('2025-12-31');
    $intervalo2 = $hoje -> diff($anonovo);
    echo "faltam " . $intervalo2 -> days . " dias para o ano novo";

    echo "<hr>";
    $aniversariol = new DateTime('2026-01-22');
    $intervalo3 = $hoje -> diff($aniversariol);
    echo "faltam " . $intervalo3 -> days . " dias para o aniversario de lata";

    echo "<hr>";
    $aniversarioe = new DateTime('2026-06-30');
    $intervalo4 = $hoje -> diff($aniversarioe);
    echo "faltam " . $intervalo4 -> days . " dias para o meu aniversário";

    echo "<hr>";
    $aniversariop = new DateTime('2025-11-09');
    $intervalo5 = $hoje -> diff($aniversariop);
    echo "faltam " . $intervalo5 -> days . " dias para o aniversário do professor";
?>