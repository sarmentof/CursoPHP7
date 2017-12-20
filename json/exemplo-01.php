<?php

######################
#
# JSON
#
# Gerando um Encode em formado JSON
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

echo json_encode($pessoas); // transforma um array em json

 ?>