<?php 

require __DIR__  . "/lista-exercicioConta.php";
require __DIR__  . "/lista-exercicioContaEnum.php";

echo "Bem-Vindo ao Banco\n";

$banco = new Banco(
    'Felipe Oliveira',
    Tipo::ContaCorrente,
);

var_dump($banco);