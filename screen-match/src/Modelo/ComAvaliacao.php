<?php

namespace ScreenMatch\Modelo;

use ScreenMatch\Exception\NotaInvalidaException;

trait ComAvaliacao
{
    private array $notas = [];

    public function avalia(float $nota): void
    {
        if($nota < 0 || $nota > 10){
            throw new NotaInvalidaException;
        }

       $this->notas[] = $nota;
    }

    public function media(): float{
        $somaDasNotas = array_sum($this->notas);
        $quantidadesNotas = count($this->notas);

        return $somaDasNotas / $quantidadesNotas;
    }
}