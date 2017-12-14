<?php

//include "exemplo-01.php"; # chama arquivo 'exemplo-01.php' que contém a função 'somar'
//include_once "exemplo-01.php"; # include_once chama apenas uma vez o arquivo.

require "exemplo-01.php"; # chama arquivo 'exemplo-01.php' que contém a função 'somar'
require "exemplo-01.php"; # chama arquivo 'exemplo-01.php' que contém a função 'somar'
//require_once "exemplo-01.php"; # require_once chama apenas uma vez o arquivo.

$resultado = somar(10,20);

echo $resultado

?>