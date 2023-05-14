<?php
$num = readline();

$ano = (int)($num / 365);
$anor = $num % 365;

$mes = (int)($anor / 30);
$mesr = $anor % 30;

echo "$ano ano(s)\n$mes mes(es)\n$mesr dia(s)\n";
?>
