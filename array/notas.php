<?php

$notas = [ 
    'Maria' => 10,
    'Ana' => 9,
    'Felipe' => 8,
    'Rafa' => null ,
    'Ricardo' => 6
];

krsort($notas);
var_dump($notas);

echo gettype($notas) . PHP_EOL ;

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL ;
}

var_dump(array_is_list($notas)) . PHP_EOL;

var_dump(array_key_exists( 'Felipe', $notas)) . PHP_EOL;

echo 'Rafa fez a prova:';
var_dump(isset($notas['Rafa'])) . PHP_EOL;

echo 'Felipe fez a prova:';
var_dump(isset($notas['Felipe'])) . PHP_EOL;

echo 'Alguem tirou 10 ? ' ;
var_dump(in_array( 10, $notas)) . PHP_EOL;

echo 'Alguem tirou 4 ? ' ;
var_dump(in_array( 4, $notas)) . PHP_EOL;

echo 'Quem tirou 10 ? ' ;
echo array_search( 10, $notas) . PHP_EOL;