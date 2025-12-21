<?php

// 4.5 Arrays em PHP

// 1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. 
// Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].

$numeros = [1, 2, 2, 3, 4, 4, 5];

$resultado = array_unique($numeros);

print_r($resultado);

// 2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
// Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.

$notas = [5, 6.5, 8, 4, 7]; 

foreach ($notas as $nota){
  
  if ( $nota > 6 ){
    echo "aluno aprovado \n";
  } else {
    echo "aluno reprovado \n";
  }
  
}

// 3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.

$conta = [
  "titular" => "Michael",
  "saldo" => 1200
  ];

echo "Nome : " . $conta["titular"] . "\n";
echo "Saldo : " . $conta["saldo"];

// 4 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.

$familia = ["Michael", "Mariana", "Thalyta"];
print_r($familia);

$familia[] = "Ilda";
print_r($familia);

?>