<?php

function realizarVenda(array $produto, int $quantidade)
{
    if ($produto['Quantidade'] <  $quantidade) {
        echo 'Não existe quantidade do estoque suficiente' . PHP_EOL;
        echo "Quantidade atual do estoque: {$produto['Quantidade']}" . PHP_EOL;
        echo "Quantidade solicitada: $quantidade" . PHP_EOL;
    } else {
        $produto['Quantidade'] = $produto['Quantidade'] - $quantidade;
    }
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
