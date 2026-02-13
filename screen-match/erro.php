<?php

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

require 'autoload.php';

$serie = new Serie('Nome da serie', 2024, Genero::Acao, 7, 20, 30);
$episodio = new Episodio($serie, 'Piloto', 1);
$episodio->avalia(10);


$conversor = new ConversorNotaEstrela();
echo $conversor->converte($episodio);