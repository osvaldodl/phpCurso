<?php
 ///Constantes;

define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;

echo "<br>";

//array constante
define("BANCO_DE_DADOS", [
	'127.0.01',
	'root',
	'password',
	'teste'
]);

print_r(BANCO_DE_DADOS);

echo "<br>";

//////////////////

echo PHP_VERSION; 

echo "<br>";

echo DIRECTORY_SEPARATOR; // muda de acordo com SO

echo "<br>";

echo '<a href = "https://secure.php.net/manual/pt_BR/reserved.constants.php"> site de constantes</a>';

?>