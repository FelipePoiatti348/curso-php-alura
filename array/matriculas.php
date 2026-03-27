<?php

$alunos2025 = [ 
    'Maria',
    'Ana',
    'Felipe',
    'Rafa',
    'Ricardo'
];

$novosAlunos = [ 
    'Nico',
    'Humberto',
    'Jair',
    'Monique',
    'Patricia'
];


$alunosDesmpacotamento = [...$alunos2025,'Robert', ...$novosAlunos];
$alunos2026 = array_merge($alunos2025, $novosAlunos);
array_push($alunos2026, 'Alice', 'Bob', 'Charlie');
$alunos2026[] = 'Luiz';
array_unshift( $alunos2025, 'Alberto', 'Cadu');

echo array_pop($alunos2026) . PHP_EOL;

echo array_shift($alunos2026) . PHP_EOL;

var_dump($alunos2026);
var_dump($alunosDesmpacotamento);