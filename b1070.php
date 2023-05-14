<?php
$num = readline();
if ($num % 2 == 0) {
	$num++;
}

for ($i = 0; $i < 12; $i+=2) {
	echo $num + $i . "\n";	
}
?>
