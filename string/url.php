<?php

$url = 'https://alura.com.br';

if (str_starts_with($url, 'https')){
    echo "É uma URL segura \n";
} else {
    echo "Não é uma URL segura \n";
}

echo PHP_EOL;

if(str_ends_with($url, '.br')){
    echo "É um dominio do Brasil \n";
} else {
    echo "Não é um dominio do Brasil \n";
}