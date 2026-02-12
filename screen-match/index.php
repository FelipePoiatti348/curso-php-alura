<?php

require 'autoload.php';

use ScreenMatch\Modelo\{
   Filme,
   Serie,
   Episodio,
   Genero,
   Titulo
};
use ScreenMatch\Calculos\{
    CalculadoraDeMaratona,
    ConversorNotaEstrela
};

echo "Bem-Vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor',
    2010,
    Genero::SuperHeroi,
    180
);

$filme->avalia(5);
$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(8);
$filme->avalia(7.2);

var_dump ($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$serie = new Serie(
    'Lost', 
    2007, 
    Genero::Drama, 
    10, 
    20, 
    30
);
$episodio = new Episodio($serie , 'Episodio Piloto', 1);

echo $serie->anoLancamento . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracaoEmMinutos = $calculadora->duracao();
echo "Para esta maratona, você precisa de $duracaoEmMinutos minutos\n";

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie) . "\n";
echo $conversor->converte($filme) . "\n";