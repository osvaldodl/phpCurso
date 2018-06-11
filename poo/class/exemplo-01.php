<?php

class Pessoa{

	public $nome;



	public function falar(){
		
		return "Meu nome é ".$this->nome;

	}


}


$classe = new Pessoa();
$classe->nome = "Osvaldo";
echo $classe->falar();


?>