<?php

//Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
//Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.

$notas = [ 5, 8.5, 9, 7, 6];
$notasSomadas = array_sum($notas);
$media = $notasSomadas / 5;

if($media >= 6) {
    echo "O aluno foi aprovado";
}elseif($media < 5.9){
    echo "O aluno foi reprovado";
}else{
    echo "Valor não valido";
}