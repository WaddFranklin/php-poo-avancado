<?php

class Conta
{
    private static int $numeroDeContas = 0;

    private Titular $titular;
    private float $saldo = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            throw new Exception("Saldo indisponível!");
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            throw new Exception("Valor precisa ser positivo!");
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDeDestino): void
    {
        if($valorATransferir > $this->saldo) {
            throw new Exception("Saldo indisponível!");
        }

        $this->saca($valorATransferir);
        $contaDeDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }
}
