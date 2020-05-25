<?php
require_once 'Produto.php';

function menuVenda(array $produtos)
{
    system('clear');
    echo 'Escoha o produto para realizar venda' . PHP_EOL;

    foreach ($produtos as $key => $produto) {
        echo $key . ' - ' . $produto->nome . PHP_EOL;
    }

    $indiceProduto = readline();

    if (!is_numeric($indiceProduto) || $indiceProduto > count($produtos) - 1) {
        echo 'Produto não existe' . PHP_EOL;
        readline('Precione enter para voltar ao menu inicial.' . PHP_EOL);
        return null;
    }

    echo 'Escreva a quantidade vendida' . PHP_EOL;
    $quantidade = readline();

    if ($produtos[$indiceProduto]->realizarVenda($quantidade)) {
        echo 'Venda efetuada com sucesso';
    } else {
        echo 'Não foi possivel realizar a venda do produto' . PHP_EOL;
        readline('Precione enter para voltar ao menu inicial.' . PHP_EOL);
    }
}

function mostrarProdutos($produtos)
{
    system('clear');
    foreach ($produtos as $produto) {
        echo $produto->recuperaDescruicaoProduto() . PHP_EOL;
    }
    readline(PHP_EOL . 'Precione enter para voltar ao menu inicial.');
}
