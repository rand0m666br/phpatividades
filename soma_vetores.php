<?php
$veta = [];
$vetb = [];
$vetc = [];

$qtd = readline("Quantos valores vai ter cada vetor? ");

echo "Digite os valores do vetor A:\n";
for ($i = 0; $i < $qtd; $i++) {
	array_push($veta, readline());
}

echo "Digite os valores do vetor B:\n";
for ($i = 0; $i < $qtd; $i++) {
	array_push($vetb, readline());
}
echo "VETOR RESULTANTE:\n";
for ($i = 0; $i < $qtd; $i++) {
	array_push($vetc, ($veta[$i] + $vetb[$i]));
	echo $vetc[$i] . "\n";
}
?>
