<?php

// Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.


echo "Digite seu peso: \n";
$peso = fgets(STDIN);
echo "Digite sua altura: \n";
$altura = fgets(STDIN);

function cauculoDeIMC(float $peso, float $altura): float {
    if($peso > 0 && $altura > 0){
        return $resultado = $peso/($altura * $altura );
    }else{
        echo "Dados não validos";
    }
};

$caucularIMC = cauculoDeIMC($peso, $altura);

echo "Seu IMC é: $caucularIMC";
