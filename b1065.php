<?php
$par = 0;
for ($i = 0; $i < 5; $i++) {
	$num = (int)readline();
	if ($num % 2 == 0) {
		$par++;
	}
}
echo "$par valores pares\n";
?>
