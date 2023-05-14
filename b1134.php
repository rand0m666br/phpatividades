<?php
$al = 0;
$ga = 0;
$di = 0;

$num = 0;
while ($num != 4) {
	$num = readline();
	if ($num == 1) $al++;
	if ($num == 2) $ga++;
	if ($num == 3) $di++;
}
echo "MUITO OBRIGADO\nAlcool: $al\nGasolina: $ga\nDiesel: $di\n";
?>
