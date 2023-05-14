<?php
$num1 = readline();
$num2 = readline();

$soma = 0;

for($i = $num2 + 1; $i < $num1; $i++) {
	if ($i % 2 != 0) {
		$soma = $soma + $i;
	}
}
echo $soma . "\n";
?>
