<?php

class Funcionario {
    private $nome;
    private $cpf;
    private $cargo;

    public function __construct(string $nome, string $cpf, string $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }
}