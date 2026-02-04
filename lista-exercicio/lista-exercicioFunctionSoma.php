<?php

// Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e 
// retorne o resultado da operação.


echo "Digite um numero inteiro: \n";
$numero = (int) fgets(STDIN);
echo "Digite um numero inteiro: \n";
$numero2 = (int) fgets(STDIN);
echo "Escreva a opercçao matematica desejada: \n";
$operacao = trim((string) fgets(STDIN));

function operacaoMatematica(int $numero, int $numero2, string $operacao): int{
        if ($operacao === "soma"){
            return $resultado = ($numero + $numero2);
        }elseif ($operacao == "menos"){
            return $resultado = ($numero - $numero2);
        }elseif ($operacao == "vezes"){
            return $resultado = ($numero * $numero2);
        }elseif ($operacao == "divisao"){
            return $resultado = ($numero / $numero2);
        }else{
            echo "Operaçao não aceita\n";
        }
};

$problemaMatematico = operacaoMatematica($numero, $numero2, $operacao);

echo "Seu resultado é: $problemaMatematico";

