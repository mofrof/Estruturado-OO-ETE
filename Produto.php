<?php

class Produto
{
    private $nome;
    private $valor;
    private $quantidade;
    private $nomeFornecedor;
    private $tipoFornecedor;

    public function __construct(string $nome, float $valor, int $quantidade, string $nomeFornecedor, string $tipoFornecedor)
    {
        if ($nome == "") {
            echo "Erro nome sem valor";
        } else {
            $this->nome = $nome;
        }
        if ($nomeFornecedor == "") {
            echo "Erro nome sem valor";
        } else {
            $this->nome = $nome;
        }


        $this->alterarValor($valor);
        $this->quantidade = $quantidade;
        $this->nomeFornecedor = $nomeFornecedor;
        $this->tipoFornecedor = $tipoFornecedor;
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
        }
        return true;
    }

    public function recuperaDescruicaoProduto(): string
    {
        return "Produto: $this->nome | ValorVenda:$this->valor | Quant_Estoque:$this->quantidade | Nome Fornecedor: $this->nomeFornecedor | Tipo do fornecedor: $this->tipoFornecedor";
    }
}
