<?php
	function navbarPHP($ruta){
?>
<nav class="navbar navbar-light navbar-expand-lg">
	<div id="nav-collapse" class="navbar-collapse collapse">
        <ul class="navbar-nav">
            <div class="row">
                <div class="col-9">
                    <div class="row">
                        <div class="col-2">
                            <button type="button" class="btn-toggle btn-secondary">
                                <span class="icon-caret-left"></span>
                            </button>
                        </div>
                        <div class="col-10">
                            <div class="form-gr w-100">
                                <label class="control-form">
                                    <input v-model="keyword" type="text" placeholder="Buscar" @keyup="search">
                                </label>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dropdown">
                        <button class="dropbtn btn btn-danger">Mi Perfil</button>
                        <div class="dropdown-content">
                            <a href="#">Mi perfil</a>
                            <a href="#">Mis Pedidos</a>
                            <a href="<?php echo $ruta ?>database/close.php?id=<?php echo $_GET['distributor']?>">Salir</a>
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </div>
</nav>
<?php
	}
?>