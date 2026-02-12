<?php

namespace ScreenMatch\Modelo;

trait ComAvaliacao
{
    private array $notas = [];

    public function avalia(float $nota): void{
       $this->notas[] = $nota;
    }

    public function media(): float{
        $somaDasNotas = array_sum($this->notas);
        $quantidadesNotas = count($this->notas);

        return $somaDasNotas / $quantidadesNotas;
    }
}