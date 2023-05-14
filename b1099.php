<?php
$qtd = readline();
$result = [];

for ($i = 0; $i < $qtd; $i++) {
	$soma = 0;
	$num = explode(" ", readline());
	$x = $num[0];
	$y = $num[1];

	if ($x > $y) {
		$maior = $x;
		$menor = $y;
	} elseif ($y > $x) {
		$maior = $y;
		$menor = $x;
	}
	for ($j = $menor + 1; $j < $maior; $j++) {
		if ($j % 2 != 0) {
			$soma = $soma + $j;
			array_push($result, $soma);
		}
		echo $soma[$j] . "\n";
	}
}
//var_dump($result);

//for ($j = $menor + 1; $j < $maior; $j++) {
//	echo $soma[$j] . "\n";
//}
?>
