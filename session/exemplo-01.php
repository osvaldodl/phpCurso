<?php
require_once("config.php");

echo session_id();

//force new session


echo "<br>";

session_regenerate_id();


echo session_id();

echo "<br>";

// functions 

echo session_save_path();




?>