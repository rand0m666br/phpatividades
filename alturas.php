<?php
$nome = [];
$idade = [];
$altura = [];

$menor = 0;

$qtd = (int)readline("Quantas pessoas serao digitadas? ");

for ($i = 0; $i < $qtd; $i++) {
	echo "Dados da " . ($i + 1) . "a pessoa\n";
	array_push($nome, readline("Nome: "));
	array_push($idade, (int)readline("Idade: "));
	array_push($altura, (float)readline("Altura: "));
}
for ($i = 0; $i < $qtd; $i++) {
	if ($idade[$i] < 16) {
		$menor++;
	}
}
echo "\nAltura média: " . number_format(array_sum($altura) / $qtd, 2, ".", "") . "\n";
echo "Pessoas com menos de 16 anos: " . number_format(($menor / $qtd * 100), 1, ".", "") . "\n";
for ($i = 0; $i < $qtd; $i++) {
	if ($idade[$i] < 16) {
		echo $nome[$i] . "\n";
	}
}
?>
