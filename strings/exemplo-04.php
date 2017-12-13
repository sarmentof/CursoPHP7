<?php

########################################################
#
# strlen - Retorna o tamanho de uma string
#
########################################################

$frase = "A repetição é mãe da retenção.";

$q = strpos($frase, "mãe"); # retorna a posição onde a palavra se encontra
$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q); # retorna o que está antes da posição do valor $q
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); # contagem de string


var_dump($texto."<br />");
var_dump($texto2);

?>