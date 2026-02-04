<?php

class Conta{
    private float $saldoEmCentavos;
    private string $nomeTitular;
    private int $numeroConta;

    public function depositar(float $depositoNaConta): void 
    {
        if ($depositoNaConta >  0){
            $saldoEmCentavos += $depositoNaConta;
        }else{
            echo "Deposito não permitido\n";
        }
    }

    public function sacar(float $sacarNaConta): void 
    {
        if($sacarNaConta > 0 && $sacarNaConta <= $this->saldoEmCentavos){
            $saldoEmCentavos -= $sacarNaConta;
        }else{
            echo "Saque não permitido\n";
        }
    }

    public function voltaSaldoEmCentavos(float $saldoEmCentavos): void 
    {
        $this->voltaSaldoEmCentavos = $saldoEmCentavos;
    }

    public function saldoEmCentavos(): float
    {
       return $this->saldoEmCentavos;   
    }

    public function retornaNomeTitular(string $nomeTitular): void 
    {
        $this->retornaNomeTitular = $nomeTitular;
    }  

    public function nomeTitular(): string 
    {
        return $this->nomeTitular;
    }

    public function voltaNumeroConta(int $numeroConta): void 
    {
        $this->voltaNumeroConta = $numeroConta;
    }
 
    public function numeroConta(): int 
    {
        return $this->numeroConta;
    }

}