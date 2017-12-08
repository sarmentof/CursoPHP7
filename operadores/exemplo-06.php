<?php

###############
// Operadores
###############

// Tratamento para comparação de valores NULL

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c; // Caracteres "??" não exibe a variável caso seja NULL, mas para no primeiro valor diferente de NULL


 ?>