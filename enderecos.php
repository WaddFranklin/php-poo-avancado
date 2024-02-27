<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$endereco1 = new Endereco('Maceió', 'Farol', 'uma rua', '84');
$endereco2 = new Endereco('Rio', 'Centro', 'uma rua qualquer', '33');

$endereco1->rua = 'Av. Muniz Falcão';

echo $endereco1;
echo $endereco2;
