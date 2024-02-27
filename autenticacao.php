<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();

$diretor = new Gerente(
    'Franklin',
    new Cpf('123.123.123-12'),
    1500
);

$titular = new Titular(
    new Cpf('123.123.123-12'),
    'Nazaré',
    new Endereco('Maceió', 'Farol', 'Rua', '90')
);

$autenticador->tentaLogin($titular, 'abcd');