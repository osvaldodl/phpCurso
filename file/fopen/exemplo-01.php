<?php


$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s")."\r\r\n");

fclose($file);


?>