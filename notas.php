<?php
$n1 = readline("Digite a primeira nota: ");
$n2 = readline("Digite a segunda nota: ");

if (($n1 + $n2) > 60.0) {
	echo "NOTA FINAL = " . number_format(($n1 + $n2), 1, ".", "") . "\n";
}elseif (($n1 + $n2) < 60.0) {
	echo "NOTA FINAL = " . number_format(($n1 + $n2), 1, ".", "") . "\n" . "REPROVADO\n";
}

switch ($variable) {
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
}
?>
