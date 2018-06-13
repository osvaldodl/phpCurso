<?php


$filename = "image.jpg";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$minetype = $fileinfo->file($filename);

$base64encode =  "data:$minetype;base64,". $base64;

?>

<a href= "<?=$base64encode?>" target="_blank">link para imagem </a>

<img src="<?=$base64encode?>">