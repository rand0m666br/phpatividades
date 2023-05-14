<?php
$num = explode(" ", readline());
$h1 = $num[0];
$h2 = $num[1];

if ($h1 > $h2) {
	echo "O JOGO DUROU " . number_format(24 - ($h1 - $h2), 0, "", "") . " HORA(S)\n";
} elseif ($h2 > $h1) {
	echo "O JOGO DUROU " . number_format($h2 - $h1, 0, "", "") . " HORA(S)\n";
} else {
	echo "O JOGO DUROU 24 HORA(S)\n";
}
?>
