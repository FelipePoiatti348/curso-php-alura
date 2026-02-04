<?php 

// Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.


$notas = [10, 8, 4, 9, 5];

rsort ($notas);
$top3 = array_slice($notas, 0, 3);
var_dump($top3);

