<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    public function transfere(float $valorATransferir, Conta $contaDeDestino): void
    {
        if($valorATransferir > $this->saldo) {
            throw new Exception("Saldo indisponível!");
        }

        $this->saca($valorATransferir);
        $contaDeDestino->deposita($valorATransferir);
    }

    protected function percentualTarifa(): float
    {
        return 0.05;
    }
}
