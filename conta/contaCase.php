<?php 

$saldo = 1000;
$titular = "Felipe Oliveira Poiatti";

echo "******************\n";
echo "Titular : $titular\n";
echo "Saldo atual : R$ $saldo\n";
echo "******************\n";

do{

echo "1.Consultar saldo atual\n";
echo "2.Sacar valor\n";
echo "3.Depositar valor\n";
echo "4.Sair\n";

echo "Digite o numero desejado: \n";
$numero = (float) fgets(STDIN);

 switch($numero){
    case 1:
            echo "******************\n";
            echo "Titular : $titular\n";
            echo "Saldo atual : R$ $saldo\n";
            echo "******************\n";
    break;
    case 2: 
           echo "Qual valor deseja sacar: \n";
           $valorDeSaque = (float) fgets(STDIN);
      if($valorDeSaque > 0 && $valorDeSaque <= $saldo){
          $saldo -= $valorDeSaque;
      }else {
         echo "Saldo Insuficiente\n";
      }
    break;
    case 3:
           echo "Qual valor deseja depositar: \n";
           $valorDoDeposito = (float) fgets(STDIN);
         if($valorDoDeposito > 0 ){
            $saldo += $valorDoDeposito; 
      }else{
         echo "Deposito não permitido\n";
      }
      break;
      case 4:
             echo "Adeus ate logo!\n";
      break;
      default:
            echo "Opçao invalida\n";
      break;               
    }

}while($numero != 4);

