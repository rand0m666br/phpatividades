<?php
$num = readline();

$h = $num / 3600;
$hr = $num % 3600;

$m = $hr / 60;
$mr = $hr % 60;

$horas = (int)$h;
$min = (int)$m;
$seg = (int)$mr;


echo "$horas:$min:$seg\n";

// echo number_format($h, 0, ".", "") . ":" . number_format($m, 0, ".", "") . ":" . number_format($mr, 0, ".", "") . "\n";
?>