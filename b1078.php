<?php
$num = readline();

for ($i = 1; $i <=10 ; $i++) {
	if ($num > 2 and $num < 1000) {
		echo "$i x $num = " . ($i * $num) . "\n";
	}
}
?>
