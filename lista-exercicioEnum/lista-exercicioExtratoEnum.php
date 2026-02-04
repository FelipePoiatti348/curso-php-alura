<?php

enum ContaBancaria {
    case ContaCorrente;
    case ContaDeInvestimentos;
    case ContaPoupanca;
    case ContaUniversitaria;

    public function possuiTaxas(): bool {
        return match ($this) {
            self::ContaUniversitaria => false,
            self::ContaPoupanca => false,
            default => true,
        };
    }
}