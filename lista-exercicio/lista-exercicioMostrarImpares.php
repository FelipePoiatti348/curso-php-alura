<?php

//Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.
//Nao precisava declara uma variavel fora (So ir diereto no for)

for ($contador = 0; $contador < 100; $contador++) {
    if ($contador % 2 != 0) {
   echo "Este numero é impar: $contador\n";
}
}