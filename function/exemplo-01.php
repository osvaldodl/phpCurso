<?php

function hehe(){

	return "Hello wolrd!<br>";


}

echo hehe();

echo strlen(hehe());

echo "<hr>";

////////////////////////////////////////////////

function salario (){

	return 946.00;
}

echo "José recebeu 3 salarios: ". salario()*3;

echo "<hr>";
//////////////////////////////////////////////


function ola($text = "nada no get"){

	return "Olá $text";
}

echo ola(isset($_GET['nome']));

echo "<hr>";

/////////////////////////////////////////////////

function args(){
	return func_get_args();


}

var_dump(args("GG", 1, true, 3.4));

echo "<hr>";
/////////////////////////////////////////////////////

$var = 50;
function passagem_referencia(&$value){
	$value +=10;
	
}

passagem_referencia($var);

echo $var;

echo "<hr>";

//////////////////////////////////////////////////////////

function soma(int ...$valores): string { // recebe um array com parametros retorna um certo tipo;
	return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(3.4, 1);
echo "<br>";
echo soma(4, 5);

echo "<hr>";

/////////////////////////////////////////////////////////////

$dino = function($a, $b){

	$a + $b;
};



echo var_dump($dino(32, 25));


?>