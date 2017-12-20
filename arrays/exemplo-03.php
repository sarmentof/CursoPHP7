<?php

######################
#
# Array Bidimensional
#
# Inserindo informações dentro de um Array já existente com comando "array_push"
#
######################

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Glaucio',
	'idade'=>25
));

print_r($pessoas);

 ?>