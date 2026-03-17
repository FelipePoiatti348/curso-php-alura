<?php 

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Felipe',
        'nota' => 9,
    ],
    [
        'aluno' => 'Rafaela',
        'nota' => 6,
    ],

];

function ordemNotas(array $nota1, array $nota2): int
{
   return $nota1['nota'] <=> $nota2['nota'];
}

usort($notas, 'ordemNotas');
var_dump($notas);