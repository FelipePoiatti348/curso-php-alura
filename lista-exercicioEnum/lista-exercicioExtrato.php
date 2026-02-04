<?php

// Crie uma enum em PHP com tipos de contas bancárias e implemente um método informando se a conta possui taxas. 
// Contas correntes e de investimento possuem taxas, enquanto contas poupança e universitárias não;


class Conta {

    public function __construct(
        public readonly ContaBancaria $conta
    ) {}

    public function possuiTaxas(): bool {
        return $this->conta->possuiTaxas();
    }
}
