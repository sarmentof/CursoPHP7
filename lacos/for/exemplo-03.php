<?php

########################################################
#
# Exemplo prático de uso do condicional "for"
#
########################################################

echo "<select>";

for ($i=date("Y"); $i > date("Y")-100; $i--) {

	echo '<option value="'.$i.'">'.$i.'</option>'; # exibe uma list box com anos 2017-1918 (decremento de 100 anos partindo do ano atual)

}

echo "</select>";

?>