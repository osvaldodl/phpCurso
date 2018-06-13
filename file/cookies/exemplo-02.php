<?php 

if(isset($_COOKIE["MeuCookie"])){

	$obj = json_decode($_COOKIE["MeuCookie"]);

	echo $obj->biscoito1;
}

?>
