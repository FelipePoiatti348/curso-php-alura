<?php

$opcao = '1';

$menuSelecionado = match ($opcao) {
    '1' => 'Saldo',
    '2' => 'Deposito',
    '3' => 'Saque',
    '4' => 'Sair',
    default => null,
    };

echo $menuSelecionado . "\n";
var_dump($menuSelecionado) . "\n"; 