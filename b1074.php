<?php
$qtd = readline();

for ($i = 0; $i < $qtd; $i++) {
	$num = readline();
	if ($num == 0) {
		echo "NULL\n";
	}elseif ($num % 2 == 0) {
		if ($num > 0) {
			echo "EVEN POSITIVE\n";
		}else {
			echo "EVEN NEGATIVE\n";
		}
	}else {
		if ($num > 0) {
			echo "ODD POSITIVE\n";
		}else {
			echo "ODD NEGATIVE\n";
		}
	} 
}
?>
