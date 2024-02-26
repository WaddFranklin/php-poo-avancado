<?php

require_once './src/Conta.php';
require_once './src/Titular.php';
require_once './src/Cpf.php';
require_once './src/Endereco.php';

$endereco = new Endereco('Maceió', 'Barro Duro', 'Av. Muniz Falcão', '93A');

$franklin = new Titular(new Cpf('123.456.789-10'), 'Franklin Nascimento', $endereco);
$primeiraConta = new Conta($franklin);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$larissa = new Titular(new Cpf('111.111.111-11'), 'Larissa Borges', $endereco);
$segundaConta = new Conta($larissa);

$rafael = new Titular(new Cpf('777.776.445-12'), 'Lucas Rafael', $endereco);
$terceiraConta = new Conta($rafael);

echo Conta::recuperaNumeroDeContas() . PHP_EOL;

unset($primeiraConta);
echo Conta::recuperaNumeroDeContas() . PHP_EOL;
