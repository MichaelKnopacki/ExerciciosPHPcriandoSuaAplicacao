<?php

$titular = "Michael Knopacki";
$saldo = 1200;
$opcao = 0;
$continuar = true ;
$saque = 50;
$deposito = 100;

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
    
    echo "Selecione uma opção: ";
    $opcao = trim(fgets(STDIN));
    echo "A Opção selecionada é {$opcao} \n";
    
    if ($opcao == 1){
        echo "Boa tarde, Sr. {$titular}. Seu saldo é {$saldo}.";
        $continuar == true;
    }elseif ($opcao == 2) {
        $saldo = $saldo - $saque;
        echo "Boa tarde, Sr. {$titular}. Você realizou um saque de R$ {$saque}, agora seu saldo é de R$ {$saldoAtual}.";
        $continuar == true;
    }elseif ($opcao == 3){
        $saldo = $saldo + $deposito;
        echo "Boa tarde, Sr. {$titular}. Você realizou um depósito de R$ {$saque}, agora seu saldo é de R$ {$saldoAtual}.";
        $continuar == true;
    }elseif ($opcao == 4){
        echo "Obrigado volte sempre";
        $continuar == false;
        break;
    }
}

?>
