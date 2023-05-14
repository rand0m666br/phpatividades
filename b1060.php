<?php
$pos = 0;

for ($i = 0; $i < 6; $i++){
	$num = readline();
	if ($num > 0) {
		$pos++;
	}
}
echo "$pos valores positivos\n";
?>
