<?php
while (true) {
	$valor = explode(" ", readline());
	$num1 = $valor[0];
	$num2 = $valor[1];
	$soma = 0;

	if ($num1 > $num2) {
		$maior = $num1;
		$menor = $num2;
	} elseif ($num2 > $num1) {
		$maior = $num2;
		$menor = $num1;
	}

	if ($menor <= 0) {
		die;
	}
	for ($i = $menor; $i <= $maior; $i++) {
		$soma = $soma + $i;
		echo "$i ";
	}
	echo "Sum=$soma\n";
}
?>
