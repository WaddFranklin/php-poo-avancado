<?php

require_once './autoload.php';

use Alura\Banco\Modelo\{Pessoa, Cpf, Endereco, Funcionario};
use Alura\Banco\Modelo\Conta\{Titular, Conta};

$pessoa = new Pessoa('Fulano', new Cpf('123.123.123-12'));

$funcionario = new Funcionario("Franklin", new Cpf('111.111.111-11'), 'CEO');

$titular = new Titular(new Cpf('222.222.222-22'), 'Larissa', new Endereco('Maceió', 'Farol', 'nome de alguma rua', '123'));

var_dump($funcionario);
