<?php

class Titulo
{
    private array $notas;

        public function __construct(
        public readonly string $nome, 
        public readonly int $anoLancamento, 
        public readonly Genero $genero,
    ) {
       $this->notas = [];
    }

    public function avalia(float $nota): void{
       $this->notas[] = $nota;
    }

    public function media(): float{
        $somaDasNotas = array_sum($this->notas);
        $quantidadesNotas = count($this->notas);

        return $somaDasNotas / $quantidadesNotas;
    }

    public function duracaoEmMinutos(): int
    {
        return 0;
    }
}