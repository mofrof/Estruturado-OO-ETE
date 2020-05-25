<?php

require_once 'funcoes.php';
require_once 'Produto.php';

$produto1 = new Produto();
$produto2 = new Produto();
$produto3 = new Produto();

$produto1->nome = "Martelo";
$produto1->nomeFornecedor = "Tramontina";
$produto1->quantidade = 40;
$produto1->valor = 10.5;
$produto1->tipoFornecedor = "Ferramenta";

$produto2->nome = "Chave-Philips";
$produto2->nomeFornecedor = "Tramontina";
$produto2->quantidade = 60;
$produto2->valor = 17.5;
$produto2->tipoFornecedor = "Ferramenta";

$produto3->nome = "Torneira";
$produto3->nomeFornecedor = "Tigre";
$produto3->quantidade = 15;
$produto3->valor = 3.5;
$produto3->tipoFornecedor = "Peça";


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
