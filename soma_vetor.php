<?php
$qtd = readline("Quantos numeros voce vai digitar? ");
$valor = [];

for ($i = 0; $i < $qtd; $i++) {
	array_push($valor, readline("Digite um numero: "));
}
echo "VALORES = ";
for ($i = 0; $i < $qtd; $i++) {
	echo $valor[$i] . " ";
}
echo "\nSOMA = " . number_format(array_sum($valor), 2, ".", "") . "\n";
echo "MEDIA = " . number_format((array_sum($valor) / $qtd), 2, ".", "") . "\n";
?>
