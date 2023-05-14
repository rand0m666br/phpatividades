<?php
$num = [];

for ($i = 0; $i < 100; $i++) {
	array_push($num, readline());
}
$maior = max($num);

echo $maior . "\n";
echo array_search($maior, $num)+1 . "\n";

?>
