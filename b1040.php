
<?php
$notas = explode(" ", readline());
$n1 = $notas[0] * 2;
$n2 = $notas[1] * 3;
$n3 = $notas[2] * 4;
$n4 = $notas[3] * 1;
$media = ($n1 + $n2 + $n3 + $n4)/10;

echo "Media: " . number_format($media, 1, ".", "") . "\n";

if ($media >= 7) {
    echo "Aluno aprovado.\n";
}elseif ($media >= 5 && $media <= 6.9) {
    echo "Aluno em exame.\n";
    $exame = readline();
    echo "Nota do exame: $exame\n";
    $mediafinal = ($media + $exame)/2;
    if ($mediafinal >= 5) {
        echo "Aluno aprovado.\nMedia final: " . number_format($mediafinal, 1, ".", "") . "\n";
    }else {
        echo "Aluno reprovado.\nMedia final: " . number_format($mediafinal, 1, ".", "") . "\n";
    }
}else {
    echo "Aluno reprovado.\n";
}
?>
