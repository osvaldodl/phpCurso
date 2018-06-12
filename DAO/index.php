<?php

require_once("config.php");

//$root = new Usuario();

//$root->loadById(5);

//echo $root;

//$list = Usuario::getList();

//echo json_encode($list);

//$search = Usuario::search("ro");

//$user = new Usuario();

//$user->login("root", "12312");

//echo $user;


//aluno = new Usuario();

//$aluno->setDeslogin("Arou");
//$aluno->setDessenha("ggwp");

//$aluno->insert();

//echo $aluno;


//$usuario = new Usuario();

//$usuario->loadById(15);

//$usuario->update("Dino", "asdasda");

//echo $usuario;


$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>