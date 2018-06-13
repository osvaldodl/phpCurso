<?php

class Usuario{

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;


	public function __construct($login = "", $pass = ""){

		$this->setDeslogin($login);
		$this->setDessenha($pass);


	}

	public function getIdusuario(){
		
		return $this->idusuario;

	}

	public function setIdusuario($idusuario){

		$this->idusuario = $idusuario;
	}

	public function getDeslogin(){
		
		return $this->deslogin;

	}

	public function setDeslogin($deslogin){

		$this->deslogin = $deslogin;
	}

	public function getDessenha(){
		
		return $this->dessenha;

	}

	public function setDessenha($dessenha){

		$this->dessenha = $dessenha;
	}

	public function getDtcadastro(){
		
		return $this->dtcadastro;

	}

	public function setDtcadastro($dtcadastro){

		$this->dtcadastro = $dtcadastro;
	}


	public function setData($row){
			$this->setIdusuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro($row['dtcadastro']);


	}
	public function loadById($id){

		$sql = new Sql();

		$result= $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID" => $id));

		if(isset($result[0])){
			$this->setData($result[0]);
		}

	}



	public static function search($login){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH", 
			array("SEARCH" => "%".$login."%"));

	}

	public function update($login, $senha){

		$sql = new Sql();

		$this->setDeslogin($login);
		$this->setDessenha($senha);

		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASS WHERE idusuario = :ID", array(
			":LOGIN"=>$this->getDeslogin(),
			":PASS"=>$this->getDessenha(),
			":ID"=>$this->getIdusuario()

		));

	}


	public static function getList(){
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

	}

	public function login($user, $pass){


		$sql = new Sql();

		$result= $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :USER AND dessenha = :PASS", 
			array(":USER" => $user, ":PASS" => $pass));

		if(isset($result[0])){

			$this->setData($result[0]);
		}else{

			throw new Exception("Login e/ou senha invalidos");
		}

	}


	public function insert(){

		$sql = new Sql();

		$result = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASS)", 
			array(
			":LOGIN"=>$this->getDeslogin(),
			":PASS"=> $this->getDessenha()
		));

		if (count($result)>0){

			$this->setData($result[0]);
		}

	}

	public function delete(){
		$sql = new Sql();

		$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$this->getIdusuario()
		));

			$this->setIdusuario(0);
			$this->setDeslogin("");
			$this->setDessenha("");
			$this->setDtcadastro(new DateTime());



	}

	public function __toString(){

		return json_encode(array(
			"idusuario" =>$this->getIdusuario(),
			"deslogin" =>$this->getDeslogin(),
			"dessenha" =>$this->getDessenha(),
			"dtcadastro" =>$this->getDtcadastro()

		));
	}


}

?>