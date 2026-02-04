<?php

// Crie uma função em PHP que converta graus celsius para Fahrenheit.

echo "Digite o graus celsius: \n";

$temperatura = trim((float)fgets(STDIN));

function conversao (float $temperatura): float{
    if($temperatura > 0){
       return $resultado = ($temperatura * 9/5) + 32; 
    }else {
        echo "Opcao invalida";
    }
};

$conversaoDosGraus = conversao($temperatura);

echo "Seu graus em fahrenheit é: $conversaoDosGraus °F";