<?php

$anoNascimento = '2005';

$idade = 2026 - $anoNascimento;

echo $idade . PHP_EOL;

if($anoNascimento == 2005){
    echo 'Sim' . PHP_EOL;
}else{
    echo 'Não' . PHP_EOL;
}