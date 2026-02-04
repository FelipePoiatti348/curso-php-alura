<?php

//Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) ...
// ...  dependendo do horário encontrado em uma variável (inteiro representando as horas).

$horario = $argv[1];

if ($horario <= 12 ) {
    echo "Bom dia";
}elseif($horario <= 18) {
    echo "Boa tarde";
}elseif($horario <= 24) {
    echo "Boa noite";
}else{
   echo "Horario não definido";
}