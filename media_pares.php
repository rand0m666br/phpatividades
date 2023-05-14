<?php
$par = [];
$qtd = (int)readline("Quantos elementos vai ter o vetor? ");

for ($i = 0; $i < $qtd; $i++) {
	$num = readline("Digite um numero: ");
	if ($num % 2 == 0) {
		array_push($par, $num);
	}
}
if (count($par) > 0) {
	echo "MEDIA DOS PARES = " . number_format(array_sum($par) / count($par), 1, ".", "") . "\n";
} else {
	echo "NENHUM NUMERO PAR\n";
}
?>
