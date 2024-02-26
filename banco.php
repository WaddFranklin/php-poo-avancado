<?php

require_once './src/Pessoa.php';
require_once './src/Titular.php';
require_once './src/Funcionario.php';
require_once './src/Cpf.php';
require_once './src/Endereco.php';
require_once './src/Conta.php';

$pessoa = new Pessoa('Fulano', new Cpf('123.123.123-12'));

$funcionario = new Funcionario("Franklin", new Cpf('111.111.111-11'), 'CEO');

$titular = new Titular(new Cpf('222.222.222-22'), 'Larissa', new Endereco('Maceió', 'Farol', 'nome de alguma rua', '123'));

var_dump($funcionario);