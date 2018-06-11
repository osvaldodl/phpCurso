<?php


interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($freiar);
	public function trocarMarcha($marcha);

}

class Civic implements Veiculo{

	public function acelerar($velocidade){
		echo "O veiculo acelerou até " . $velocicade . " km/h"."<br>";

	}

	public function frenar ($velocidade){

		echo "O veiculo frenou até ". $velocidade . "Km/h <br>";
	}

	public function trocarMarcha($marcha){
		echo "O veiculo engatou a marcha ". $marcha;


	}


}

$carro = new Civic();

$carro->frenar(0);


?>