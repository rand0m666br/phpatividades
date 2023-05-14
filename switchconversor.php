<?php
echo "Bem vindo ao conversor de unidades de medida\n \n";
$var0 = readline("Digite uma opção para converter:\n
	Horário[1]\n
	Tamanho/Distância[2]\n
	Horário com precisão[3]\n
	Temperatura[4]\n");

switch($var0) {
case 1:
	$var1 = readline("Você quer converter Horas[1], Dias[2], Semanas[3] ou Anos[4]? ");

	switch ($var1) {
	case 1:
		$num = readline("Digite a quantidade de horas: ");
		$var = readline("Você quer converter para Dias[2], Semanas[3] ou Anos[4]? ");
		switch ($var) {
		case 2:
			echo "$num horas são " . number_format(($num / 24), 1, ".", "") . " dias.\n";
			break;
		case 3:
			echo "$num horas são " . number_format(($num / 168), 2, ".", "") . " semanas.\n";
			break;
		case 4:
			echo "$num horas são " . number_format(($num / 8760), 9, ".", "") . " anos.\n";
			break;
		default:
			echo "Erro: valor inválido.\n";
			break;
		}
		break;
	case 2:
		$num = readline("Digite a quantidade de dias: ");
		$var = readline("Você quer converter para Horas[1], Semanas[3] ou Anos[4]? ");
		switch ($var) {
		case 1:
			echo "$num dias são " . number_format(($num * 24), 1, ".", "") . " horas.\n";
			break;
		case 3:
			echo "$num dias são " . number_format(($num / 7), 2, ".", "") . " semanas.\n";
			break;
		case 4:
			echo "$num dias são " . number_format(($num / 365), 9, ".", "") . " anos.\n";
			break;
		default:
			echo "Erro: valor inválido.\n";
			break;
		}
		break;	
	case 3:
		$num = readline("Digite a quantidade de semanas: ");
		$var = readline("Você quer converter para Horas[1], Dias[2] ou Anos[4]? ");
		switch ($var) {
		case 1:
			echo "$num semanas são " . number_format(($num * 168), 1, ".", "") . " horas.\n";
			break;
		case 2:
			echo "$num semanas são " . number_format(($num * 7), 2, ".", "") . " dias.\n";
			break;
		case 3:
			echo "$num semanas são " . number_format(($num / 52.143), 9, ".", "") . " anos.\n";
			break;
		default:
			echo "Erro: valor inválido.\n";
			break;
		} 
		break;
	case 4:
		$num = readline("Digite a quantidade de anos: ");
		$var = readline("Você quer converter para Horas[1], Dias[2] ou Semanas[3]? ");
		switch ($var) {
		case 1:
			echo "$num anos são " . number_format(($num * 8760), 1, ".", "") . " horas.\n";
			break;
		case 2:
			echo "$num anos são " . number_format(($num * 365), 2, ".", "") . " dias.\n";
			break;
		case 3:
			echo "$num anos são " . number_format(($num * 52.143), "2", ".", "") . " semanas.\n";
			break;
		default:
			echo "Erro: valor inválido.\n";
			break;
		}
		break;
	default:
		echo "Erro: valor inválido.\n";
		break;	

	}
case 2:
	$var1 = readline("Você quer conveter Metros[1], Km[2], Centímetros[]
}
?>
