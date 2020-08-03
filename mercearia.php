<?php

require_once 'funcoes.php';
require_once 'Produto.php';

$produto1 = new Produto("Martelo", 10.5, 40, "Tramontina", "Ferreamenta");
$produto2 = new Produto("Chave-Pilips", 17.5, 60, "Tramontina", "Ferramenta");
$produto3 = new Produto("Torneira", 3.5, 15, "Tigre", "Peça");


$produto1->alterarNome("asdf");
exit;

$produtos = [$produto1, $produto2, $produto3];
//$TotalVendido = 0;
$controleSistema = 0;

do {
    system('clear');
    echo PHP_EOL . "\t\tSistema de vendas" . PHP_EOL;
    echo 'Escoha uma das opções abaxio' . PHP_EOL;
    echo '1 - Realizar venda' . PHP_EOL;
    echo '2 - Exibir produtos' . PHP_EOL;
    echo '0 - Encerra o programa' . PHP_EOL;

    $controleSistema = readline();

    if ($controleSistema  == 1) {
        menuVenda($produtos);
    } else if ($controleSistema == 2) {
        mostrarProdutos($produtos);
    } else {
        echo 'opção inexistente';
        break;
    }
} while ($controleSistema != 0);
