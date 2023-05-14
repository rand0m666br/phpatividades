<?php
$num = explode(" ", readline());
$v1 = $num[0];
$v2 = $num[1];
$v3 = $num[2];

sort($num);

for ($i = 0; $i < count($num); $i++) {
	echo $num[$i] . "\n";
}
echo "\n$v1\n$v2\n$v3\n";
?>
