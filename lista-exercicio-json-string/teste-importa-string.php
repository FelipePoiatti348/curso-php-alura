<?php

$caminhoDoArquivo = __DIR__ . ("/perfil.json");
$conteudoDoArquivo = file_get_contents($caminhoDoArquivo);
$perfil = json_decode($conteudoDoArquivo);

var_dump($perfil);