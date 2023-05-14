<?php
$n1 = readline("Digite a primeira nota: ");
$n2 = readline("Digite a segunda nota: ");

$media = ($n1 + $n2) / 2;

echo "Média: " . number_format($media, 1, ".", "") . "\n";

if ($media >= 6) {
	echo "Aluno aprovado.\n";
}else{
	echo "Aluno reprovado.\n";
}
?>
