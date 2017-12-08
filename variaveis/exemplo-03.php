<?php
############################
// Variáveis do tipo String
############################

// string
$nome = "HCODE";
$site = 'www.hcode.com.br';

// number
$ano = 1990;
$salario = 5500.99;

// boolean
$bloqueado = false;

// array
$frutas = array("abacaxi","laranja","manga");

// objeto
$nascimento = new DateTime();

//var_dump($nascimento);

####################
// Tipos Especiais
####################

// resource
$arquivo = fopen("exemplo-03.php", "r"); //tipo stream

// nulo
$nulo = NULL;

// vazio
$vazio = "";

var_dump($vazio);

 ?>