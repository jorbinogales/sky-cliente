<?php function index($ruta, $href){ ?>
	
	<!-- WRAPPER -->
	<div id="wrapper" class="d-flex">

	    <!-- SIDEBAR  -->
	    <?php 
	    	echo sidebarPHP($ruta, $href);
	    ?>
	    <!-- /SIDEBAR -->

	    <!-- PAGE CONTENT -->
	    <div id="page-content-wrapper">
	         <?php
	         	echo navbarPHP($ruta);
	         ?>
	         <div class="main-content container-fluid">
	         	<div class="container">
	         	
	         	<?php 
	         	if(isset($_GET['page'])){
	         		switch ($_GET['page']) {

					    case 'index':
					        require 'productos.php';
					    break;

					    case 'perfil':
					        require 'perfil.php';
					    break;

					    case 'soport':
					        require 'soporte.php';
					    break;

					    case 'cart':
					        require 'carrito.php';
					    break;

					    case 'shop':
					        require 'shop.php';
					    break;

					    default:
					    	require 'productos.php';
					}
				} else {
					require 'productos.php';
				}
	         	?>
	         	</div>
	         </div>
	    </div>
	    <!-- /PAGE CONTENT -->
	</div>
	<!-- /WRAPPER  -->
<?php } ?>