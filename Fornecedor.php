<?php

class Fornecedor
{
    private $nome;
    private $tipo;

    public function __construct(string $nome, string $tipo)
    {
        $this->alterarNomeFornecedor($nome);
        $this->tipo = $tipo;
    }

    private function alterarNomeFornecedor($novoNomeFornecedor)
    {
        if ($novoNomeFornecedor == "") {
            echo "Erro nomeFornecedor vazio!";
        } else {
            $this->nomeFornecedor = $novoNomeFornecedor;
        }
    }
}
