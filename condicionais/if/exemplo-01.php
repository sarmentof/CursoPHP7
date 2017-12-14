<?php

########################################################
#
#
#
#
########################################################

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {

	echo "É Criança! <br />";

}elseif ($qualASuaIdade < $idadeMaior) {

	echo "É Adolescente! <br />";

}elseif ($qualASuaIdade < $idadeMelhor) {

	echo "É Adulto! <br />";

}else{

	echo "É idoso! <br />";
}


echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de Idade"; # operador ternário, dentro do comando echo

?>