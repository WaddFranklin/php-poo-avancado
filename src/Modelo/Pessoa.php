<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedade;

    protected string $nome;
    protected Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaCpf();
    }

    final protected function validaNome(string $nomeTitular): void
    {
        if (strlen($nomeTitular) < 5) {
            // throw new Exception("O nome precisa ter mais do que 5 caracteres!");
            echo "O nome precisa ter mais do que 5 caracteres!" . PHP_EOL;
            exit();
        }
    }
}
