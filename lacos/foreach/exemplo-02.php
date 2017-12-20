<form>
	<input type="text" name="nome"><br><br>
	<input type="date" name="nascimento"><br><br>
	<input type="submit" value="OK">
</form>

<?php

##############################################################
#
# Uso de foreach para recuperar dados de formulário HTML
#
##############################################################


if (isset($_GET)) {

	foreach ($_GET as $key => $value) {

		echo "Nome do Campo: " . $key . "<br />";

		echo "Valor do Campo: " . $value . "<br />";

		echo "<hr>" . "<br />";
	}
}


 ?>