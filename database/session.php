<?php 

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

	session_start();

	$_SESSION['cliente'] = $_POST['id']; // SESSION IDENTIFICADOR //

	if($_SESSION != null){
		$error = 'error';
	} else {
		$error = 'success';
	}

	echo json_encode(array('POST' => $_POST, 'error' => $error));
}
?>