<?php

$titular = "Michael Knopacki";
$saldo = 1200;
$opcao = 0;
$continuar = true ;


while ($continuar == true){
  
    echo "
    ********************
    Titular:{$titular}
    Saldo atual: R$ {$saldo}
    *********************
    1. Consultar saldo atual
    2. Sacar valor
    3. Depositar valor
    4. Sair\n
    ";
    
    echo "Selecione uma opção: \n";
    $opcao = trim(fgets(STDIN));
    echo "A Opção selecionada é {$opcao} \n";
    
    if ($opcao == 1){
        echo "\n Boa tarde, Sr. {$titular}. Seu saldo é {$saldo}. \n";
    } elseif ($opcao == 2) {
        echo "Qual valor pretende sacar? \n";
        $saque = (float) trim(fgets(STDIN)); // É bom forçar ser número (float)

        if ($saque > $saldo) {
            echo "Saldo insuficiente para este saque!\n";
        } else {
            $saldo -= $saque; // Equivalente a $saldo = $saldo - $saque;
            echo "\n Boa tarde, Sr. {$titular}. Você realizou um saque de R$ {$saque}, agora seu saldo é de R$ {$saldo}. \n";
        }
}   elseif ($opcao == 3){
        echo "Qual valor pretende depositar? \n";
        $deposito = trim(fgets(STDIN));
        $saldo = $saldo + $deposito;
        echo "\n Boa tarde, Sr. {$titular}. Você realizou um depósito de R$ {$deposito}, agora seu saldo é de R$ {$saldo}. \n";
    }elseif ($opcao == 4){
        echo "\n Obrigado volte sempre \n";
        $continuar = false;
        break;
    }
}

?>