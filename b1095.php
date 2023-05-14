<?php

for ($i = 1, $j = 60; $j >= 0; $i+=3, $j-=5) {
	echo "I=$i J=$j\n";
}

/*
$j = 60;
$i = 1;
for ($j = 60; $i = 1; $j > = 0; $i <= 37; $j-=5; $i+=3) {
	echo "I=$i J=$j\n";
}
/*
for ($i = 1; ; $i+=3) {
	echo "I=$i";
	for ($j = 60; $j >= 0; $j-=5) {
		echo " J=$j\n";
		if ($j == 0) die;
	}
}*/

?>
