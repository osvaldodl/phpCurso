<?php

if (! is_dir("images")){
	mkdir("images");
}


foreach (scandir("images") as $itens) {
	if(!in_array($itens, array(".", "..")))
	
		unlink("images/".$itens);

}

echo "limpo";


?>