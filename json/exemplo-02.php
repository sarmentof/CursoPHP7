<?php

######################
#
# JSON
#
# Gerando um Decode de um formado JSON
#
######################
#
$json = '[{"nome":"João","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true); // transforma um json em array

var_dump($data);


 ?>