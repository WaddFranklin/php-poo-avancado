<?php

use Alura\Banco\Modelo\{Cpf, Endereco};
use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};

require_once './autoload.php';

$conta = new ContaCorrente(new Titular(
    new Cpf('123.123.123-12'),
    'Franklin',
    new Endereco(
        'Maceió',
        'Farol',
        'Uma rua',
        '94B'
    )
));
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo() . PHP_EOL;
