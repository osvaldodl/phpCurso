<form method="POST" enctype="multipart/form-data">
	
	<input type="file" name="fileUpload">

	<button type="submit">Send</button>

</form>

<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

	$file = $_FILES["fileUpload"];

	if ($file["error"]){

		throw new Exception("Error: ". $file["error"]);
		
	}


	$dirUpload  = "uploads";

	if(!is_dir($dirUpload)){

		mkdir($dirUpload);
	}

	if(move_uploaded_file($file["tmp_name"], $dirUpload . DIRECTORY_SEPARATOR.$file["name"]))
	{
		echo "Upload realizado com sucesso!";

	}else{
		throw new Exception("Não foi possivel realzar o upload.");
		
	}



}


?>