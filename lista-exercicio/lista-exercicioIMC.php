<?php

//Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.
// A fórmula é: IMC = Peso / (Altura x Altura).

$altura = $argv[1];
$peso = $argv[2];

$alturaNaConta = $altura * $altura; 

$IMC = $peso / $alturaNaConta;

if ($IMC < 18.5) {
    echo "Baixo peso IMC";
}elseif($IMC < 24.9) {
    echo "Peso normal IMC";
}elseif($IMC < 29.9) {
    echo "Excesso de peso IMC";
}elseif($IMC < 34.9) {
    echo "Obesidade I (Moderada)";
}elseif($IMC < 39.9) {
    echo "Obesidade II (Severa)";
}else{
   echo "Obesidade III (Morbida)";
}