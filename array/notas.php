<?php

$notas = [ 
    'Maria' => 10,
    'Ana' => 9,
    'Felipe' => 8,
    'Rafa' => 7,
    'Ricardo' => 6
];

krsort($notas);
var_dump($notas);