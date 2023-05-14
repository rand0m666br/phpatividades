<?php
$par = [];
$qtd = readline("Quantos numeros voce vai digitar? ");

for ($i = 0; $i < $qtd; $i++) {
	$num = readline("Digite um numero: ");
	if ($num % 2 == 0) array_push($par, $num);
}

echo "\nNUMEROS PARES:\n"; 
for ($i = 0; $i < count($par); $i++) {
	echo $par[$i] . " ";
}

echo "\nQUANTIDADE DE PARES = " . count($par) . "\n";
?>
