<?php
for ($i = 1; $i <= 9; $i+=2) {
	for ($j = 6+$i; $j > 3+$i; $j--) {
		echo "I=$i J=$j\n";
	}
}

?>
