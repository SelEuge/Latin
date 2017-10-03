<?php
session_start();
if ($_SESSION['estado'] == true) {
	$url = $_SESSION ['url_pag']; //  capturamos la url para direccionar
	unset($_SESSION);
	session_destroy();
	session_start();
	$_SESSION['estado'] = false;
	header("Location: $url");
}
?>
