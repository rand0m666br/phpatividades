
<?php
$valores = explode(" ", readline());
$cod = $valores[0];
$qtd = $valores[1];

switch ($cod) {
    case 1:
        $total = $qtd * 4.00;
        break;
    case 2:
        $total = $qtd * 4.50;
        break;
    case 3:
        $total = $qtd * 5.00;
        break;
    case 4:
        $total = $qtd * 2.00;
        break;
    case 5:
        $total = $qtd * 1.50;
        break;
    
    default:
        $total = 0.00;
        break;
}
echo "Total: R$ " . number_format($total, 2, ".", "") . "\n";
?>