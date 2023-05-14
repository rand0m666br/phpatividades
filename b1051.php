<?php
$num = readline();

if ($num >= 0.00 and $num <= 2000.00) {
	echo "Isento\n";
} elseif ($num > 2000.00 and $num <= 3000.00) {
	echo "R$ " . number_format((8/100*$num ), 2, ".", "") . "\n"; 
} elseif ($num >= 3000.01 and $num <= 4500.00) {
	echo "R$ " . number_format((18/100*$num ), 2, ".", "") . "\n"; 
} elseif ($num > 4500.00) {
	echo "R$ " . number_format((28/100*$num ), 2, ".", "") . "\n"; 
}
?>
