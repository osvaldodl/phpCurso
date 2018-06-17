<?php
	session_start();

	//depois de verificar login e senha reiniciar o id da sessao


	session_destroy();

	session_start();

	session_regenerate_id();

	var_dump(session_id());

?>


