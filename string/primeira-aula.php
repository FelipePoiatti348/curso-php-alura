<?php

$nome = 'Felipe Oliveira';

$minhaFamilia = str_contains($nome, 'Oliveira');

if($minhaFamilia) {
    echo "$nome é da minha familia" . PHP_EOL;
} else {
    echo "$nome não é da minha familia" . PHP_EOL;
}