<?php 

// Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas.

$frase =  "Vinicius Dias, 1997, Programador";

var_dump($frase);
$posicaoDeVirgula = explode(",",$frase );
var_dump($posicaoDeVirgula);
