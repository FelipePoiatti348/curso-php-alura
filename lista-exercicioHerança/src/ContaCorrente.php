<?php

class ContaCorrente extends ContaBancaria
{
    public function __construct(
        int $depositar,
        int $sacar,
        float $consultarSaldo,
        public readonly float $taxa,
        public readonly float $cobrarTarifaMensal
    ){
        parent :: __construct( $depositar, $sacar, $consultarSaldo);
    }

    public function descontoMensal(): void{
        $desconto = $this->consultarSaldo - $this->cobrarTarifaMensal;
        echo $desconto . "\n";
    }

    public function taxaDeSaque(): void{
        $taxaDescontada = $this->consultarSaldo - $this->taxa;
        echo $taxaDescontada . "\n";
    }
}