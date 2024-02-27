<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedade
{
    public function __get($nomeAtributo)
    {
        $metodo = ucfirst($nomeAtributo);
        $metodo = "recupera{$nomeAtributo}";
        return $this->$metodo();
    }
}
