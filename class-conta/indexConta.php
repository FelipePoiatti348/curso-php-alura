<?php 

require __DIR__ . "/Conta.php";

echo "Bem-vindo a sua conta\n";

$conta = new Conta();
$conta->voltaSaldoEmCentavos(10);
$conta->retornaNomeTitular("Nome Padrão"); 
$conta->voltaNumeroConta(198575); 

var_dump ($conta);
