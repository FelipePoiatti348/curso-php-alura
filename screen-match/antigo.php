<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes.php";

echo "Bem vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick" ;

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador ++){
    $notas[] = (float) $argv[$contador] ;
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas ;
$planoPrime = true;

$incluidoNoPlano = incluindoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano do lançamento: $anoLancamento\n"; 

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação\n",
    "Thor : Ragnarok" => "Super - Heroi\n",
    "Se beber não case" => "Comedia\n",
    default => "Genero desconhecido\n",
};

echo "Esse filme e de : $genero\n";

$filme = criarFilme(
    nome: "Thor : Ragnarok",
    anoLancamento: 2021, 
    nota: 7.8, 
    genero: "Super-Heroi"
);

echo $filme-> nome;

var_dump($notas);
sort($notas);
var_dump($notas);
$menosNotas = min($notas);
echo min($notas);

var_dump($filme-> nome);
$posicaoDoisPontos = strpos($filme-> nome, ":");
var_dump($posicaoDoisPontos);

var_dump(substr($filme-> nome, 0, $posicaoDoisPontos));

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . "/filme.json", $filmeComoStringJson);


