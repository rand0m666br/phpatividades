<?php
$num = readline();

if ($num % 2 == 0) {
	$num = $num - 1;
}

for ($i = 1; $i <= $num; $i+=2) {
	echo $i . "\n";
}
?>
