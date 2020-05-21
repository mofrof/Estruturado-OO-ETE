<?php

$produtos = [
    'Martelo' => ['Valor' => 7.5, 'Quantidade' => 40, 'Fornecedor' => 'Tramontina', 'Tipo' => 'Ferramenta'],
    'Chave-philips' => ['Valor' => 10.5, 'Quantidade' => 50, 'Fornecedor' => 'Tramontina', 'Tipo' => 'Ferramenta'],
    'Torneira' => ['Valor' => 3, 'Quantidade' => 50, 'Fornecedor' => 'Tigre', 'Tipo' => 'peça']

];

function realizarVenda(array $produto, int $quantidade)
{
    if ($produto['Quantidade'] <  $quantidade) {
        echo 'Não existe quantidade do estoque suficiente' . PHP_EOL;
        echo "Quantidade atual do estoque: {$produto['Quantidade']}" . PHP_EOL;
        echo "Quantidade solicitada: $quantidade" . PHP_EOL;
    } else {
        $produto['Quantidade'] = $produto['Quantidade'] - $quantidade;
    }
    echo var_dump($produto);
    readline(PHP_EOL . 'Precione enter para voltar ao menu inicial.');

    return $produto;
}

function menuVenda(array $produtos)
{

    system('clear');
    echo 'Escoha o produto para realizar venda' . PHP_EOL;
    echo '1 - Martelo' . PHP_EOL;
    echo '2 - Chave-philips' . PHP_EOL;
    echo '3 - Torneira' . PHP_EOL;
    $produto = readline();

    system('clear');
    echo 'Escreva a quantidade vendida' . PHP_EOL;

    $quantidade = readline();

    if ($produto == 1) {
        $produtos['Martelo'] =   realizarVenda($produtos['Martelo'], $quantidade);
    } else if ($produto == 2) {
        $produtos['Chave-philips'] =   realizarVenda($produtos['Martelo'], $quantidade);
    } else if ($produto == 3) {
        $produtos['Torneira'] =   realizarVenda($produtos['Martelo'], $quantidade);
    } else {
        echo 'produto inexistente';
        readline(PHP_EOL . 'Precione enter para voltar ao menu inicial.');
    }
    
    return $produtos;
}

function mostrarProdutos($produtos)
{
    system('clear');
    foreach ($produtos as $Nome => $dados) {
        ['Valor' => $valor, 'Quantidade' => $quantidade, 'Fornecedor' => $fonecedor, 'Tipo' => $tipo] = $dados;
        echo "Produto: $Nome | ValorVenda:$valor | Quant_Estoque:$quantidade" . PHP_EOL;
    }
    readline(PHP_EOL . 'Precione enter para voltar ao menu inicial.');
}

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
