<?php

class Endereco{
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	public function __destruct(){

		//var_dump("Destruir");
	}


	public function __toString(){
		return $this->logradouro. ", ". $this->numero. ", ". $this->cidade;

	}


	public function getLogradouro(){
		return $this->logradouro;

	} 

	public function setLogradouro($logradouro){
		$this->logradouro = $logradouro;

	}
	public function getNumero(){
		return $this->numero;

	} 

	public function setNumero($numero){
		$this->numero = $numero;

	}
	public function getCidade(){
		return $this->cidade;

	} 

	public function setCidade($cidade){
		$this->cidade = $cidade;

	}




}

$meuEndereco = new Endereco("Rua M", 32, "Salvador");
echo $meuEndereco;

//unset($meuEndereco);
?>