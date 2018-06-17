<?php
$pasta = "arquivos";

$permissao = "0775"; //padrao unix

if(!is_dir($pasta)) mkdir($pasta, $permissao); 



?>

