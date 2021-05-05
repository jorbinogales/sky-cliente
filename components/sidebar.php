<?php
	function sidebarPHP($ruta, $href){
?>
<?php 
    if(isset($_GET['page'])){
        switch ($_GET['page']) {
            case 'index':
                $indexMenu = true;
            break;

            case 'perfil':
                $perfilMenu = true;
            break;

            case 'soport':
                $soportMenu = true;
            break;

            case 'cart':
                $cartMenu = true;
            break;

            case 'shop':
                $shopMenu = true;
            break;

            default:
                $indexMenu = true;
        }
    } else {
        $indexMenu = true;
    }
?>
	   <div id="sidebar-wrapper" class="border-right">
                <div class="icon-list">
                    <ul>
                        <li <?php if(isset($indexMenu)){ ?> class="active" <?php } ?>>
                            <a href="<?php echo $href ?>/<?php echo $_GET['distributor']?>/index" title="">
                                <span class="icon-shop"></span>
                            </a>
                        </li>
                        <li <?php if(isset($perfilMenu)){ ?> class="active" <?php } ?>>
                            <a href="<?php echo $href ?>/<?php echo $_GET['distributor']?>/perfil" title="">
                                <span class="icon-user"></span>
                            </a>
                        </li>
                        <li <?php if(isset($soportMenu)){ ?> class="active" <?php } ?>>
                            <a href="<?php echo $href ?>/<?php echo $_GET['distributor']?>/soport" title="">
                                <span class="icon-chat-alt-fill"></span>
                            </a>
                        </li>
                        <li <?php if(isset($cartMenu)){ ?> class="active" <?php } ?>>
                            <a href="<?php echo $href ?>/<?php echo $_GET['distributor']?>/cart" title="">
                                <span class="icon-shopping-cart"></span>
                            </a>
                        </li>
                        <li <?php if(isset($shopMenu)){ ?> class="active" <?php } ?>>
                            <a href="<?php echo $href ?>/<?php echo $_GET['distributor']?>/shop" title="">
                                <span class="icon-money"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="secondary-list">
                    <div class="sidebar-heading">
                        <img src="<?php echo $ruta ?>dist/img/logo.png" alt="logo-sky">
                    </div>
                    <div class="list-group list-group-flush">
                        
                    </div>
                </div>
            </div>
<?php
	}
?>