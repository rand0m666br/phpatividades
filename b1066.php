<?php
$pos = 0;
$neg = 0;
$par = 0;
$impar = 0;

for ($i = 0; $i < 5; $i++){
	$num = (int)readline();
	if ($num > 0) {
		$pos++;
	}elseif ($num < 0) {
		$neg++;
	}
	if ($num % 2 == 0) {
		$par++;
	}else {
		$impar++;
	}
}
echo "$par valor(es) par(es)\n$impar valor(es) impar(es)\n$pos valor(es) positivo(s)\n$neg valor(es) negativo(s)\n";
?>
