<?php 

$data = array('biscoito1' => "chocolate" );

setcookie("MeuCookie", json_encode($data), time()+3600);

echo "Ok ";


?>
