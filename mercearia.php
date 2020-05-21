<?php

require_once 'funcoes.php';

$produtos = [
    'Martelo' => ['Valor' => 7.5, 'Quantidade' => 40, 'Fornecedor' => 'Tramontina', 'Tipo' => 'Ferramenta'],
    'Chave-philips' => ['Valor' => 10.5, 'Quantidade' => 50, 'Fornecedor' => 'Tramontina', 'Tipo' => 'Ferramenta'],
    'Torneira' => ['Valor' => 3, 'Quantidade' => 50, 'Fornecedor' => 'Tigre', 'Tipo' => 'peça']

];

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
        $produtos = menuVenda($produtos);
    } else if ($controleSistema == 2) {
        mostrarProdutos($produtos);
    } else {
        echo 'opção inexistente';
        break;
    }
} while ($controleSistema != 0);
