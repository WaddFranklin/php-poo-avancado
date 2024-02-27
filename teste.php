<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

$desenvolvedor = new Desenvolvedor('Franklin', new Cpf('123.123.123-12'), 3000);

echo $desenvolvedor->nome;