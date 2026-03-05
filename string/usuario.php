<?php

$nome = 'Felipe Oliveira';
$email = ' felípe@alura.com.br ';
$senha = 123;

if (strlen($senha) < 8){
    echo 'Senha insegura' . PHP_EOL;
} 

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

echo trim($email, '') . PHP_EOL;