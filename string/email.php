<?php


function geraEmail($nome): void
{
    $conteudoEmail = <<<FIM
    Olá, $nome!

    Estamos entrando em contato para
    {motivos}

    {assinatura}
    FIM;

echo $conteudoEmail;
}

geraEmail( 'Felipe Oliveira');