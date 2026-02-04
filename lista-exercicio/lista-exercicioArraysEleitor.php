<?php

//Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.

$contaBancaria = [
    "titular" => "Ricardo",
    "banco" => "Santader",
    "saldo" => "8000,00",
];

echo "O titular do cartão é " . $contaBancaria ["titular"] . ",seu banco é " . $contaBancaria ["banco"] . ",seu saldo e de " . $contaBancaria ["saldo"];