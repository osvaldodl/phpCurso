<?php

///GET SESSION

	session_start();

	echo $_SESSION['nome'];

/// DELETE SESSION

	session_unset();

	session_destroy();//kill
	echo $_SESSION['nome'];

?>