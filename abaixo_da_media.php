<?php
$valor = [];
$qtd = (int)readline("Quantos elementos vai ter o vetor? ");

for ($i = 0; $i < $qtd; $i++) {
	array_push($valor, readline("Digite um numero: "));
}
$media = array_sum($valor) / $qtd;
echo "MEDIA DO VETOR = $media\n";
echo "ELEMENTOS ABAIXO DA MEDIA:\n";
for ($i = 0; $i < $qtd; $i++) {
	if ($valor[$i] < $media) {
		echo $valor[$i] . "\n"; 
	}
}
?>
