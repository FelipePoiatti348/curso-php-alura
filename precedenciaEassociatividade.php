<?php

//Precendecia e Associatividade(Precendecia De Operadores)

//Operadores matematicos

$matematicos = 1 - 2 - 3 ;
echo $matematicos . PHP_EOL; 

$a = $b = $c = 1 . PHP_EOL;
echo $a;

$matematico = 1 - (2 - 3) ;
echo $matematico . PHP_EOL; 

//Operadores de string

$mensagem = 'Soma: ' ; 
$mensagem .= 5 + 5;
echo $mensagem . PHP_EOL;
echo "Soma: " . 2 + 2 . PHP_EOL;

//Operadores de arrays

$array1 = [1 ,2];
$array2 = [3 ,4];

var_dump($array1 + $array2) . PHP_EOL;


$array1 = [1 ,2];
$array2 = [1 => 2 , 0 => 2];

var_dump($array1 == $array2);

//Operadores Ternarios 

$nota1 = 10;
$nota2 = 4; 
$valor1 = $nota1 > 5 ? $nota1 : 1;
$valor2 = $nota2 > 5 ? $nota2 : 1;
echo "Acima $valor1 e Abaixo $valor2" . PHP_EOL;

//Operador Elvis

$nota3 = 10;
$nota4 = 4; 
$valor3 = $nota3 > 5 ?: 0;
$valor4 = $nota4 > 5 ?: 0;
echo "True $valor3 e False $valor4" . PHP_EOL;

//Operador de Aglutinação

$null ??= null;

var_dump($array1[3] ?? false) . PHP_EOL;