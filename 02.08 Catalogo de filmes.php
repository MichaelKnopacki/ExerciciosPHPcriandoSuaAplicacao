-- 02.08 Catalogo de filmes
<?php
// 1. Defina variáveis com informações sobre o filme, como nome, ano de lançamento, nota e se ele está incluído no plano.

$titulo = "Corra que a policia vem ai";
$anoLancamento = 2025;
$nota = 9.5 + 1.0;
$inclusoNoPlano = false;
$planoUsuario = "Comum";

// 2. Realize operações como soma e divisão para, com várias notas, chegar a uma média.

$nota1 = 5; 
$nota2 = 6.6; 
$nota3 = 4.8;

$somarnota = $nota1 + $nota2 + $nota3; 
$medianota = ($nota1 + $nota2 + $nota3) /3; 
$multiplicaconota = $nota1 * $nota2 * $nota3;

echo $somarnota."\n";
echo $medianota."\n";
echo $multiplicaconota."\n";

// 3. Utilize operadores lógicos para definir se o filme está incluído no plano.

if ( $planoUsuario == ""){
  echo "Faça o login";
} else if ( $inclusoNoPlano == true || $planoUsuario == "Premium") {
  echo "Bom filme!";
} else{
  echo "Você não tem acesso a esse título, mude seu plano para o Premium \n";
}

// 4. Utilize de concatenação e interpolação de strings para formatar a exibição dos dados do filme.

//concatenação
  echo "Concatenação: " . " Título: " . $titulo . " Ano de Lançamento : " . $anoLancamento . " Nota : " . $nota . " Plano : " . $planoUsuario ."\n";

//interpolação
  echo "Interpolação -> titulo: $titulo -> Ano: $anoLancamento -> Nota : $nota -> Plano : $planoUsuario"

?>




