<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$funcionario1 = new Gerente('Franklin Nascimento', new Cpf('123.123.123-12'), 'Gerente', 5000.0);
$funcionario2 = new Diretor('Larissa Borges', new Cpf('111.111.111-11'), 'Diretora', 6000.0);
$funcionario3 = new Desenvolvedor('Lucas Rafael', new Cpf('000.000.000-00'), 'Desenvolvedor', 3300.0);
$funcionario3->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($funcionario1);
$controlador->adicionaBonificacaoDe($funcionario2);
$controlador->adicionaBonificacaoDe($funcionario3);
echo $controlador->recuperaTotal() . PHP_EOL;
