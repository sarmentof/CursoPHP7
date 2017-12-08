<?php
################################
// Padrão de nomes de variáveis
################################

// Variáveis escritas no padrão Camel Case
$anoNascimento = 1980;
$nome = "Fabiano";
$sobrenome = "Sarmento";
$nomeCompleto = $nome." ".$sobrenome;

echo $nomeCompleto." nasceu em ".$anoNascimento; // uso de ponto para concatenação de variáveis

echo "<br />";

exit; // para a execução do código

// "reseta" a variável
unset($nomeCompleto);

// somente exibe na tela caso exista
if (isset($nomeCompleto)) {
	echo $nomeCompleto;
}



/**
// Variáveis com número no nome

// Jeito certo
$nome1 = "Fabiano";
$_1PCO = 256;

// Jeito errado
$%case = "JET";
$34JET = 666;
$this = "there"; // Nome reservados não são permitidos
**/

 ?>