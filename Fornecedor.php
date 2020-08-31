<?php

class Fornecedor
{
    public $nome;
    public $tipo;

    public function __construct(string $nome, string $tipo)
    {
        $this->alterarNomeFornecedor($nome);
        $this->tipo = $tipo;
    }

    private function alterarNomeFornecedor($novoNome)
    {
        if ($novoNome == "") {
            echo "Erro nomeFornecedor vazio!";
        } else {
            $this->nome = $novoNome;
        }
    }
}
