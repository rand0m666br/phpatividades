<?php
$in = 0;
$out = 0;

$qtd = readline();

for ($i = 0; $i < $qtd; $i++) {
	$num = readline();
	if ($num >= 10 and $num <= 20) {
		$in++;
	}else {
		$out++;
	}
}

echo "$in in\n$out out\n";

?>
