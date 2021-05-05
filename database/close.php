<?php 

session_start();

// QUITAMOS LOS REPORTES PARA QUE EL USUARIO NO SEA CAPAZ DE VERLOS //
error_reporting(0);


// GUARDAMOS LA SESION EN UNA VARIABLE //
$varsesion = $_SESSION['cliente'];

// VALIDAMOS QUE LA SESION CONTENGA ALGO //
if($varsesion == null || $varsesion == ""){
	die();
}


// DESTRUIMOS LA SESION Y LUEGO LO ENVIAMOS DE VUELTA AL LOGIN //
session_destroy();

header("Location: ../".$_GET['id']);

?>