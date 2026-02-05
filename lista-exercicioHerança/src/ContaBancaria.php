<?php

class ContaBancaria
{
    public function __construct(
        public readonly int $depositar,
        public readonly int $sacar,
        public readonly float $consultarSaldo
    ){
    }
}