<?php
require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Osvaldo L");
$cad->setEmail("osvaldo@site.com");
$cad->setSenha("123456");

$cad->registrarVenda();




?>