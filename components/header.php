<?php
function headerPHP($ruta){
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Cache-Control" content="no-store"/>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sky - Commercio</title>

		<!-- STYLE -->
		<link rel="stylesheet" href="<?php echo $ruta ?>dist/css/style/style.css">
		<link rel="stylesheet" href="<?php echo $ruta ?>dist/css/font/styles.css">
		<link rel="stylesheet" href="<?php echo $ruta ?>dist/css/bootstrap/bootstrap-grid.css">
		<link rel="stylesheet" href="<?php echo $ruta ?>dist/css/style/btn.css">
		<!-- API URL -->
		<script src="<?php echo $ruta ?>dist/js/const.js"></script>
		<!-- LOADING FORM  -->
		<script src="<?php echo $ruta ?>dist/js/formLoading.js"></script>
	</head>
	<body>

		<div id="notification-list">
			
		</div>
<?php 
}
?>