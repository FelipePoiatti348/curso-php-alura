<?php

require __DIR__ . '/src/Modelo/Filme.php';
require __DIR__ . '/src/Modelo/Genero.php';

echo "Bem-Vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor',
    2010,
    Genero::SuperHeroi,  
);

$filme->avalia(5);
$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(8);
$filme->avalia(7.2);

var_dump ($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento;