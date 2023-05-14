<?php
$num1 = explode(" ", readline());
$x1 = $num1[0];
$y1 = $num1[1];

$num2 = explode(" ", readline());
$x2 = $num2[0];
$y2 = $num2[1];

$op = (($x2 - $x1) ** 2) + (($y2 - $y1) ** 2);

echo number_format(sqrt($op), 4, ".", "") . "\n";
?>
