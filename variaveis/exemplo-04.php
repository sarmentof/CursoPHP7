<?php

##############################################################
// Criando variável via recebimento de paâmtro (query string)
// Arrays Super Globais
##############################################################

$nome = $_GET["a"]; // tipo string
//$nome = (int)$_GET["a"]; // tipo forçado para inteiro

//var_dump($nome);

$ip = $_SERVER["SCRIPT_NAME"]; // recebe informações do servidor

echo $ip;


 ?>