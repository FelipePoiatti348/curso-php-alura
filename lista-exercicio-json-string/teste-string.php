<?php

// Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto.

$perfil = [
    "nome" => "Vinicius",
    "anoNascimento" => 1997,
    "profissao" => "Dev",
];

$perfilComJson = json_encode($perfil);
file_put_contents(__DIR__ . "/perfil.json", $perfilComJson);