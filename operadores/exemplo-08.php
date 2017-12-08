<?php

###############
// Operadores
###############

// Precedência

$resultado = 10 + 3 / 2; // executa primeiro a divisão
$resultado = (10 + 3) / 2; // executa primeiro a soma
$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3; // Caracteres && retorna resultado boolean, comparando valor das expressões
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3; // Caracteres || retorna resultado boolean, caso uma das expressões seja verdadeira

var_dump($resultado);

 ?>