<?php

class Produto
{
    private $nome;
    private $valor;
    private $quantidade;
    private $fornecedor;
    public static $valorTotalVendido = 0;

    public function __construct(string $nome, float $valor, int $quantidade, string $nomeFornecedor, string $tipoFornecedor)
    {
        $this->alterarNome($nome);
        $this->alterarValor($valor);
        $this->quantidade = $quantidade;
        $this->fornecedor = new Fornecedor($nomeFornecedor, $tipoFornecedor);
    }

    private function alterarNome($novoNome)
    {
        if ($novoNome == "") {
            echo "Erro nome vazio!";
        } else {
            $this->nome = $novoNome;
        }
    }

    public function adinarQuantidadeEstoque($quantidadeAdiquirida)
    {
        if ($quantidadeAdiquirida > 0) {
            $this->quantidade = $this->quantidade + $quantidadeAdiquirida;
        } else {
            echo "Erro quantidade adiquirida, invalida!";
        }
    }

    public function alterarValor($novoValor)
    {
        if ($novoValor > 0) {
            $this->valor = $novoValor;
        } else {
            echo "Erro ao incerir um novo valor";
        }
    }


    public function realizarVenda(int $quantidade): bool
    {
        if ($this->quantidade < $quantidade) {
            return false;
        } else {
            $this->quantidade -= $quantidade;
            self::$valorTotalVendido += $quantidade * $this->valor;
        }
        return true;
    }

    public function recuperaDescruicaoProduto(): string
    {
        return "Produto: $this->nome | ValorVenda:$this->valor | Quant_Estoque:$this->quantidade | Nome Fornecedor: $this->nomeFornecedor | Tipo do fornecedor: $this->tipoFornecedor";
    }

    public static function exibirTtotalVendido()
    {
        echo "Foi vendido R$: " . self::$valorTotalVendido;
    }
}
