-> Forum, cafeteria:

recebe o valor total;
	Verifica se e cadastrado;;


O pedido e feito o que gera o valor total;
Ao pagar o cliente e perguntado SE tem cadastro.
	SE tiver cadastro e gerado um desconto de 10% no valor total;
	SENAO e cobrado o valor total;
Retorna o VALOR FINAL a ser pago.

A funcao recebe como parametro o VALOR TOTAL.
Calcula o desconto de 10% sobre o valor total (valorTotal * 0.10)
Retorna o valor total com desconto (valorTotal - desconto)

<?php

$valorTotal = 0;

function aplicarDesconto ($valorTotal){ 
	$desconto = $valorTotal * 0.10;
	$valorFinal = $valorTotal - $desconto;

	return $valorFinal;
}

?>



<?php

// Praticar é muito importante! Por isso, preparamos uma lista de exercícios para você exercitar o conteúdo abordado nesta aula.

// 1 - Escreva um programa em PHP que exiba seu nome na tela.

$nome = "Michael";
$sobrenome = "Knopacki";

echo "Meu nome e $nome $$sobrenome \n";

// 2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.

$nota1 = 5;
$nota2 = 6;
$nota3 = 5;
$media = ( $nota1 + $nota2 + $nota3 ) / 3;

echo "A media do aluno e $media \n";

// 3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.

$metros = 100;
$centimetros = 100;
$conversao = $metros * $centimetros;

echo " $metros tem $conversao centimetros \n";

// 4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.

$ano = 2025;

if (($ano % 400 )== 0 ){
    echo "E ano bisexto";
} elseif ( ($ano % 100 ) == 0 ){ 
    echo "E ano bisexto";
} elseif ( ($ano % 4 )  == 0){
    echo "E ano bisexto";
} else{
    echo "Nao e ano bisexto";
}

// 5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.

$celsius = 10;
$fahrenheit = ($celsius * 1.8 ) + 32;
echo " A temperatura $celsius - celsius representa $fahrenheit - fahrenheit"

?>

Modulo 3

<?php

//3. 8

$titulo = "Corra que a policia vem ai";
$anoLancamento = 2025;
$nota = 9.5;
$inclusoNoPlano = false;
$planoUsuario = "Comum";
$genero = "Indefinido";

// 1. Exiba uma mensagem informando se o filme é lançamento ou não, dependendo do ano.

if ($anoLancamento >= 2025){
	echo " Este filme e um lancamento";
} else {
	echo " Este filme nao e um lancamento";
}

// 2. Crie uma variável a partir de uma expressão condicional definindo o gênero do filme a partir de seu nome.

	if((strpos($titulo, "maluco") !== false) ||  (strpos($titulo, "risos") !== false)){
	  $genero = "Comedia";
	} else 	if((strpos($titulo, "explosao") !== false) ||  (strpos($titulo, "ataque") !== false)){
	  $genero = "Acao";
	} else 	if((strpos($titulo, "tristeza") !== false) ||  (strpos($titulo, "amor") !== false)){
	  $genero = "Drama";
	} else if((strpos($titulo, "medo") !== false) ||  (strpos($titulo, "panico") !== false)){
	  $genero = "Terror";
	}	

// 3. Faça um loop nas notas recebidas pela linha de comando para somá-las e depois calcular a média.*/

$soma = 0;

for ( $i = 1; $i <= count($argv) -1 ; $i++){
    $soma += $argv[$i];
    // $soma = $soma + $argv[$i]; Opcao
}

$media = $soma / (count($argv) - 1);
echo "A media e : $media";


?>
