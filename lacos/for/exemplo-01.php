<?php

########################################################
#
# Exemplo de uso do condicional "for"
#
########################################################


for ($i = 0; $i < 1000; $i++) { # uso do incremento com pulo de 1 número

	echo $i . "<br />";
}



for ($i = 0; $i < 1000; $i+=5) { # uso do incremento com pulo de 5 números

	echo $i . "<br />";
}



for ($i = 0; $i < 1000; $i+=5) {

	for ($i = 200 && $i < 800) continue; # não exibe a o contador entre os números 200 e 800
	for ($i == 900) break; # para de exibir contador ao chegar em 900


	echo $i . "<br />";
}

?>