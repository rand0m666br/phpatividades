<?php
$qtd = (int)readline("Quantos numeros voce vai digitar? ");
$valor = [];

for ($i = 0; $i < $qtd; $i++) {
	array_push($valor, readline("Digite um numero: "));
}
echo "NUMEROS NEGATIVOS\n";
for ($i = 0; $i < $qtd; $i++) {
	if ($valor[$i] < 0) {
		echo $valor[$i] . "\n";
	}
}
?>
