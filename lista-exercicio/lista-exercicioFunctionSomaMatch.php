<?php

echo "Digite um numero inteiro: \n";
$numero1 = (int) fgets(STDIN);
echo "Digite um numero inteiro: \n";
$numero2 = (int) fgets(STDIN);
echo "Escreva a opercçao matematica desejada: \n";
$operacao = trim((string) fgets(STDIN));

function operacaoMatematica(int $numero1, int $numero2, string $operacao): float
{
    return match($operacao) {
        'soma' => $numero1 + $numero2,
        'subtração' => $numero1 - $numero2,
        'divisão' => $numero1 / $numero2, 
        'multiplicação' => $numero1 * $numero2,
    };
}

$funcaoDeOperacao = operacaoMatematica($numero1, $numero2, $operacao);

echo "Seu resultado é: $funcaoDeOperacao";