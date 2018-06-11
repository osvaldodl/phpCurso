<?php
///Json
	$pessoas = array();

	array_push($pessoas, array(
		'nome' => 'João',
		'idade'=> 20
	));				

	array_push($pessoas, array(
		'nome' => 'Glaucio',
		'idade'=> 25
	));
	
	$json = json_encode($pessoas);
	 

	echo $json;
	echo "<br>";
	print_r (json_decode($json));

?>