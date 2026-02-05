<?php

// Crie uma classe ContaBancaria com métodos para realizar operações bancárias como depositar(), sacar() e consultarSaldo().
// Em seguida, crie uma subclasse ContaCorrente que herda da classe ContaBancaria. 
// Adicione um método específico para a subclasse, como cobrarTarifaMensal(), que desconta uma tarifa mensal da conta corrente.
// Além disso, no método sacar() da ContaCorrente, cobre uma taxa de saque também. Armazene essa taxa como uma constante da classe.

require __DIR__  . "/src/ContaBancaria.php";
require __DIR__  . "/src/ContaCorrente.php";

$conta = new ContaCorrente(
  0,
  0,
  100,
  5.20,
  15.80
);

var_dump($conta);

$conta ->descontoMensal() . "\n";

$conta ->taxaDeSaque() . "\n";