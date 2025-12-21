<?php

// 3.9

// Praticar é muito importante! Por isso, preparamos uma lista de exercícios para você exercitar o conteúdo abordado nesta aula.

// 1 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.

$n = 0;

while ($n <= 100) {
	if ($n % 2 == 1) {
	echo $n . "\n";
	}
    $n++;
}

// 2 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.

$peso = 120;
$altura = 1.80;
$imc = 0;

$imc = $peso / ($altura * $altura);

if ( $imc < 18.5 ){
	echo "abaixo do peso";
} else if ( $imc >= 18.5 && $imc <= 24.9) {
	echo "Peso normal";
} else if ( $imc >= 25 && $imc <= 29.9) {
	echo "Sobrepeso";
} else if ( $imc >= 30 && $imc <= 34.9) {
	echo "Obesidade grau 1";
} else if ( $imc >= 35 && $imc <= 39.9) {
	echo "Obesidade grau 2";
} else if ( $imc >= 40 ) {
	echo "Obesidade grau 3";
}

// 3 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).

$hora = 2;

if ( $hora >= 0 && $hora <= 11){
	echo " Bom dia ! ";
} else if ( $hora >= 12 && $hora <= 17 ) {
	echo " Bom tarde ! ";
} else if ( $hora >= 18 && $hora <= 23 ) {
	echo " Bom noite ! ";
}

?>