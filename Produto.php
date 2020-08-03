<?php

class Produto
{
    private $nome;
    private $valor;
    private $quantidade;
    private $nomeFornecedor;
    private $tipoFornecedor;
    public static $valorTotalVendido;

    public function __construct(string $nome, float $valor, int $quantidade, string $nomeFornecedor, string $tipoFornecedor)
    {
        $this->alterarNome($nome);
        $this->alterarNomeFornecedor($nomeFornecedor);
        $this->alterarValor($valor);
        $this->quantidade = $quantidade;
        $this->nomeFornecedor = $nomeFornecedor;
        $this->tipoFornecedor = $tipoFornecedor;
    }

    private function alterarNome($novoNome){
        if($novoNome == ""){
            echo "Erro nome vazio!";
        }else{
            $this->nome = $novoNome;
        }
    }

    private function alterarNomeFornecedor($novoNomeFornecedor){
        if($novoNomeFornecedor == ""){
            echo "Erro nomeFornecedor vazio!";
        }else{
            $this->nomeFornecedor = $novoNomeFornecedor;
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
        }
        return true;
    }

    public function recuperaDescruicaoProduto(): string
    {
        return "Produto: $this->nome | ValorVenda:$this->valor | Quant_Estoque:$this->quantidade | Nome Fornecedor: $this->nomeFornecedor | Tipo do fornecedor: $this->tipoFornecedor";
    }
}
