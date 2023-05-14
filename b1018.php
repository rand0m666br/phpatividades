<?php
$num = readline();

$n100 = (int)($num / 100);
$r100 = $num % 100;

$n50 = (int)($r100 / 50);
$r50 = $r100 % 50;

$n20 = (int)($r50 / 20);
$r20 = $r50 % 20;

$n10 = (int)($r20 / 10);
$r10 = $r20 % 10;

$n5 = (int)($r10 / 5);
$r5 = $r10 % 5;

$n2 = (int)($r5 / 2);
$r2 = (int)($r5 % 2);

echo "$n100 nota(s) de R$ 100,00
$n50 nota(s) de R$ 50,00
$n20 nota(s) de R$ 20,00
$n10 nota(s) de R$ 10,00
$n5 nota(s) de R$ 5,00
$n2 nota(s) de R$ 2,00
$r2 nota(s) de R$ 1,00\n";
?>
