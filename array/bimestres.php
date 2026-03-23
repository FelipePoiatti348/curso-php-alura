<?php

$notasBimestres= [ 
    'Maria' => 10,
    'Ana' => 9,
    'Felipe' => 8,
    'Rafa' => 5 ,
    'Ricardo' => 6
];

$notasBimestres2 = [ 
    'Maria' => 10,
    'Ana' => 9,
    'Felipe' => 8,
    'Rafa' => 5 ,
    'Ricardo' => 7
];

$alunosFaltantes = array_diff_assoc($notasBimestres, $notasBimestres2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($nomesAlunos, $notasAlunos));
var_dump(array_flip($alunosFaltantes));