<?php

class Produto
{
    public $nome;
    public $valor;
    public $quantidade;
    public $nomeFornecedor;
    public $tipoFornecedor;

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
