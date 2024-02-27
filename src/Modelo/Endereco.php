<?php

namespace Alura\Banco\Modelo;

/**
 * @property-read string $rua
 * @property-read string $bairro
 * @property-read string $cidade
 * @property-read string $numero
 */
final class Endereco
{
    use AcessoPropriedade;
    
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaRua()
    {
        return $this->rua;
    }

    public function recuperaBairro()
    {
        return $this->bairro;
    }

    public function recuperaCidade()
    {
        return $this->cidade;
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}" . PHP_EOL;
    }

    public function defineRua($valor): void
    {
        $this->rua = $valor;
    }

    public function defineBairro($valor): void
    {
        $this->bairro = $valor;
    }

    public function defineCidade($valor): void
    {
        $this->cidade = $valor;
    }

    public function defineNumero($valor): void
    {
        $this->numero = $valor;
    }

    public function __set($nomeAtributo, $valor)
    {
        $metodo = ucfirst($nomeAtributo);
        $metodo = "define{$nomeAtributo}";
        $this->$metodo($valor);
    }
}
