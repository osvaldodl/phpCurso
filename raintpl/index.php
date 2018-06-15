<?php

require_once("vendor".DIRECTORY_SEPARATOR ."autoload.php");

use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/",
  
);
Tpl::configure( $config );


$tpl = new Tpl;

$tpl->assign("name", "Hcode");
$tpl->assign("version", PHP_VERSION);


$tpl->draw("index");





?>