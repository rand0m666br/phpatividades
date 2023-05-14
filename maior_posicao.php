<?php
$valor = [];
$qtd = (int)readline("Quanto numeros voce vai digitar? ");

for ($i = 0; $i < $qtd; $i++) {
	array_push($valor, readline("Digite um numero: "));
}

echo "\nMAIOR VALOR =\n" . max($valor) . "\n";
$maior = $valor[0];
$pos = 0;
$posic = [];

echo "POSICAO DO MAIOR VALOR = ";
for ($i = 0; $i < $qtd; $i++) {
	
}

?>
