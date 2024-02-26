<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaCpf();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular): void
    {
        if (strlen($nomeTitular) < 5) {
            throw new Exception("O nome precisa ter mais do que 5 caracteres!");
        }
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
