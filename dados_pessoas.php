<?php
$alt = [];
$gen = [];
$muie = [];
$genmuie = [];
$hom = 0;

$qtd = readline("Quantas pessoas serao digitadas? ");

for ($i = 0; $i < $qtd; $i++) {
	//array_push($alt, readline("Altura da". ($i + 1) . "a pessoa: "));
	//array_push($gen, readline("Genero da". ($i + 1) . "a pessoa: "));
	$altura = readline("Altura da ". ($i + 1) . "a pessoa: ");
	$genero = readline("Genero da ". ($i + 1) . "a pessoa: ");
	if ($genero == "F") {
		array_push($muie,$altura);
	}elseif ($genero == "M") {
		array_push($alt, $altura);
		$hom++;
	}else {
		die;
	}
	array_push($gen, $genero);
}
echo "Menor altura = " . min($alt) . "\n";
echo "Maior altura = " . max($alt) . "\n";
echo "Media das alturas das mulheres = " . number_format((array_sum($muie) / count($muie)), 2, ".", "") . "\n";
echo "Numero de homens = $hom\n";
?>
