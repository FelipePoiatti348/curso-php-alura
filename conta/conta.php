<?php

$titular = "Felipe Oliveira";
$saldo = 1000;

echo "********************\n";
echo "Titular: $titular\n";
echo "Saldo atual: R$ $saldo\n";
echo "********************\n";

do{

echo "1.Consultar saldo atual\n";
echo "2.Sacar valor\n";
echo "3.Depositar valor\n";
echo "4.Sair\n";

echo "Digite o numero desejado: \n";
$numero = (float) fgets(STDIN);

   if($numero == 1){
     echo "********************\n";
     echo "Titular: $titular\n";
     echo "Saldo atual: R$ $saldo\n";
     echo "********************\n";
   }elseif($numero == 2){
      echo "Qual a quantidade que voce deseja sacar: \n";
      $valorDeSaque = (float) fgets(STDIN);
      if($valorDeSaque > 0 && $valorDeSaque <= $saldo){
          $saldo -= $valorDeSaque;
      }else {
         echo "Saldo Insuficiente\n";
         continue;
      }
      }elseif($numero == 3){
         echo "Qual a quantidade que voce deseja depositar: \n";
         $valorDoDeposito = (float) fgets(STDIN);
         if($valorDoDeposito > 0 ){
            $saldo += $valorDoDeposito; 
      }else{
         echo "Deposito não permitido\n";
         continue;
      }
      }elseif($numero == 4){
          break;
   }else{
      echo "Numero invalido\n";
   }
}while ($numero != 4); 

echo "Adeus,ate logo\n";
   


   
   
