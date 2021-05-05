<?php
	require 'components/components.php';
	
	

	$ruta = '';
	if(isset($_GET['page'])){
		$ruta = '../';
	}

	echo headerPHP($ruta);

	if(isset($_GET['distributor'])){

		session_start();
		if(isset($_SESSION['cliente'])){

			require 'pages/index.php';

			echo index($ruta, $href);

		} else {
			
			require 'components/banner.php';
			require 'pages/login.php';
			
			echo bannerPHP();
			echo login();
		}

	} else {

		require 'pages/404.php';

		echo php404();
	}

	echo footerPHP($ruta);
?>