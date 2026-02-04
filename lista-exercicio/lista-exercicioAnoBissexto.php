<?php
//4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.

//For divisível por 4
//Não for divisível por 100
//Exceto se também for divisível por 400 (aí volta a ser bissexto)

$ano = $argv[1];

    if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
        
        echo "Esse ano é bissexto.";

    } else {

        echo "Esse ano não é bissexto.";

    }
