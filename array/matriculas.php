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

var_dump($alunos2026);
var_dump($alunosDesmpacotamento);