<?php

use ScreenMatch\Modelo\{
   Filme,
   Serie,
   Episodio,
   Genero,
   Titulo,
   ComAvaliacao
};
use ScreenMatch\Calculos\{
    CalculadoraDeMaratona,
    ConversorNotaEstrela
};
use ScreenMatch\Exception\{
    NotaInvalidaException
};

require 'autoload.php';

$serie = new Serie('Nome da serie', 2024, Genero::Acao, 7, 20, 30);
$episodio = new Episodio($serie, 'Piloto', 1);

try{
$episodio->avalia(8);
$episodio->avalia(4);


$conversor = new ConversorNotaEstrela();
echo $conversor->converte($episodio);
}catch(NotaInvalidaException $e){
    echo "Um problema aconteceu: " . $e->getMessage();
}