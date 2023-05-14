<?php
$valores = explode(" ", readline());
$x = $valores[0];
$y = $valores[1];


while ($x != $y) {
	if ($x > $y) {
		echo "Decrescente\n";
	}elseif ($y > $x) {
		echo "Crescente\n";
	}
	$valores = explode(" ", readline());
	$x = $valores[0];
	$y = $valores[1];
}
?>
