<?php

require __DIR__  . '/lista-exercicioExtratoEnum.php';
require __DIR__  . '/lista-exercicioExtrato.php';

$conta = new Conta(ContaBancaria::ContaUniversitaria);

echo $conta->possuiTaxas()
    ? "Possui taxas\n"
    : "Não possui taxas\n";

var_dump($conta);