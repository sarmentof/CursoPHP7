<?php

$meses = array(
	"Janeiro", "Fevereiro", "Maço",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {
	echo "Índice: ".$index."<br />";
	echo "O mês é ".$mes."<br /><br />";
}

function listaDiretorios() {
	$caminho = "C:/Pessoal/Howto/canais/TI/Desenvolvimento/www/hcode/lacos/foreach";
	$barra = "/";

	echo $caminho . $barra;

	foreach ($diretorio as $dir) {
		
	}
}



?>