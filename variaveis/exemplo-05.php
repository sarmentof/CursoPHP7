<?php

#####################################
// Escopo de variável
#####################################

$nome = "Fabiano";

function teste() {

	global $nome; // torna utilizável a variável criada fora da função
	echo $nome."<br />";

}

function teste2() {

	$nome = "João"; // cria variável com nome igual a de fora da função, porém com escopo apenas dentro da função
	echo $nome." agora no teste2";

}

teste();
teste2();

 ?>