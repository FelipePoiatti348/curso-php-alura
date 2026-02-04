<?php

function exibeMensagemLancamento(int $ano): void {
    if ($ano > 2022) {
    echo "Esse filme e um lançamento\n";
} elseif($ano > 2020 && $ano <= 2022) {
    echo "Esse filme ainda e novo\n";
}
else {
    echo "Esse filme não é um lançamento\n";
}
}

function incluindoNoPlano(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;
}

function criarFilme(string $nome, int $anoLancamento, float $nota, string $genero): Filme
{
    $filme = new Filme();
    $filme-> nome = $nome;
    $filme-> anoLancamento = $anoLancamento;
    $filme-> nota = $nota;
    $filme-> genero = $genero;

    return $filme;
}