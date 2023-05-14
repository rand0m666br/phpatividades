<?php
$x = readline();
$y = readline();
$num = 0;

if ($x > $y) {
	$maior = $x;
	$menor = $y;
} elseif ($y > $x) {
	$maior = $y;
	$menor = $x;
}

for ($i = $menor; $i <= $maior; $i++) {	
	if ($i % 13 != 0) {	
		$num = $num + $i;
	}
}
echo $num . "\n";
?>
