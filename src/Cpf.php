<?php

class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {   
        $this->validaCpf($cpf);
        $this->cpf = $cpf;
    }

    private function validaCpf(string $cpf): void
    {
        $regex = "/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/";
        if (!preg_match($regex, $cpf)) {
            throw new Exception("O CPF informado não é válido!");
        }
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }
}
