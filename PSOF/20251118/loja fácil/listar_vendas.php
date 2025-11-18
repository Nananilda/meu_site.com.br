<?php
require_once "Venda.php";
require_once "Produto.php";


$vendasFile="vendas.json";
$clientesFile="clientes.json";
                                               
// Carregar arquivos  
$vendasJSON = json_decode(file_get_contents($vendasFile),true);
$clientes = json_decode(file_get_contents($clientesFile),true);


// Índice de clientes
$clientesIndex = [];
foreach($clientes as $c) {
    $clientesIndex[$c['idPessoa']] = $c['nome'];
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Vendas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="bodyVendas">
    <h1>📄Vendas Registradas </h1>


    <?php if (count($vendasJSON) === 0): ?>
        <p> Nenhuma venda registrada. </p>
        <?php else: ?>
            <table class="tableVendas" border="1" cellpadding="5">
<tr>
    <th class="thVendas">ID venda</th>
    <th class="thVendas">Cliente</th>
    <th class="thVendas">Data</th>
    <th class="thVendas">Itens</th>
    <th class="thVendas">Total(R$)</th>
        </tr>


    <?php foreach ($vendasJSON as $v):?>
        <?php $venda= Venda::fromArray($v); ?>
        <tr>
            <td class="tdVendas"><?=$venda->getId()?></td>
            <td class="tdVendas"><?=$clientesIndex[$venda->getIdPessoa()]??"Cliente não encontrado"?></td>
            <td class="tdVendas"><?=$venda->getData()?></td>
            <td class="tdVendas">
                <ul class="ulVendas">
                    <?php foreach ($venda->getItens() as $item): ?>
                        <li class="liVendas"><?= $item->getNome() ?> (R$<?= number_format($item->getPreco(),2,',','.') ?>)</li>
                        <?php endforeach; ?>
                </ul>
            </td>
            <td class="tdVendas"><b>R$<?=number_format($venda->getTotal(),2,',','.')?></b></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php endif; ?>
<br>
<a href="index.html">🔙 Voltar ao Menu</a>
</body>
</html>