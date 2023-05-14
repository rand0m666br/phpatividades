<?php
echo "Bem vindo ao conversos de unidades de medida\n \n";
$var0 = readline("Selecione o que você quer converter:\n
	Horário[1]\n
	Tamanho/Distância[2]\n
	Horário com precisão[3]\n
	Temperatura\n");
if ($var0 == 1) {
echo "Conversos de horários\n \n";
$var1 = readline("Você quer converter Horas[1], Dias[2], Semanas[3] ou Anos[4]? ");

if ($var1 == 1) {
    $num = readline("Digite a quantidade de horas: ");
    $var = readline("Você quer converter para Dias[2], Semanas[3] ou Anos[4]? ");
    if ($var == 2) {
        echo "$num horas são " . number_format(($num / 24), 1, ".", "") . " dias.\n";
    }elseif ($var == 3) {
        echo "$num horas são " . number_format(($num / 168), 2, ".", "") . " semanas.\n";
    }elseif ($var == 4) {
        echo "$num horas são " . number_format(($num / 8760), 9, ".", "") . " anos.\n";
    }else {
	    echo "Erro: valor inválido.\n";
    }
}elseif ($var1 == 2) {
    $num = readline("Digite a quantidade de dias: ");
    $var = readline("Você quer converter para Horas[1], Semanas[3] ou Anos[4]? ");
    if ($var == 1) {
	    echo "$num dias são " . number_format(($num * 24), 1, ".", "") . " horas.\n";
    }elseif ($var == 3) {
	    echo "$num dias são " . number_format(($num / 7), 2, ".", "") . " semanas.\n";
    }elseif ($var == 4) {
	    echo "$num dias são " . number_format(($num / 365), 9, ".", "") . " anos.\n";
    }else {
	    echo "Erro: valor inválido.\n";
    }
}elseif ($var1 == 3) {
    $num = readline("Digite a quantidade de semanas: ");
    $var = readline("Você quer converter para Horas[1], Dias[2] ou Anos[4]? ");
    if ($var == 1) {
	    echo "$num semanas são " . number_format(($num * 168), 1, ".", "") . " horas.\n";
    }elseif ($var == 2) {
	    echo "$num semanas são " . number_format(($num * 7), 2, ".", "") . " dias.\n";
    }elseif ($var == 4) {
	    echo "$num semanas são " . number_format(($num / 52.143), 9, ".", "") . " anos.\n";
    }else {
	    echo "Erro: valor inválido.\n";
    }
}elseif ($var1 == 4) {
    $num = readline("Digite a quantidade de anos: ");
    $var = readline("Você quer converter para Horas[1], Dias[2] ou Semanas[3]? ");
    if ($var == 1) {
	    echo "$num anos são " . number_format(($num * 8760), 1, ".", "") . " horas.\n";
    }elseif ($var == 2) {
	    echo "$num anos são " . number_format(($num * 365), 2, ".", "") . " dias.\n";
    }elseif ($var == 3) {
	    echo "$num anos são " . number_format(($num * 52.143), "2", ".", "") . " semanas.\n";
    }else {
	    echo "Erro: valor inválido.\n";
    }
}
}
?>
