<?php

// Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.
// Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.

$nomeArquivo = __DIR__ . '/teste.txt';

/* ===== LER A PRIMEIRA LINHA ===== */
$arquivo = fopen($nomeArquivo, 'r');

if ($arquivo === false) {
    die("Erro ao abrir o arquivo para leitura.");
}

echo fgets($arquivo);
fclose($arquivo);


/* ===== ESCREVER NO FINAL DO ARQUIVO ===== */
$arquivo = fopen($nomeArquivo, 'a');

if ($arquivo === false) {
    die("Erro ao abrir o arquivo para escrita.");
}

fwrite($arquivo, "\nPHP é incrível!");
fclose($arquivo);

