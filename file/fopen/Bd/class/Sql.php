<?php

class Sql extends PDO{

	private $conn;

	public function __construct (){

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	}

	private function setParams($statements, $params = array()){


		foreach ($params as $key => $value) {
			$this->setParam($statements, $key, $value);
		}

	}

	private function setParam($statements, $key, $value){
		$statements->bindParam($key, $value);
	}

	public function query($rowQuery, $params = array()){

		$stmt= $this->conn->prepare($rowQuery);
	

		$this->setParams($stmt, $params);

		 $stmt->execute();

		 return $stmt;
	}

	public function select($rawQuery, $params = array()):array
	{
		$stmt = $this->query($rawQuery, $params);

		
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}




?>