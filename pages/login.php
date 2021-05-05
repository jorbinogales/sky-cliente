

<?php function login() {?>

<section id="body-login" class="body-login">
    <img src="dist/img/logo.png" alt="logo_sky" class="logo-sky">
    <h3>Bienvenido</h3>
    <br>
    <div class="card" id="login">
    

    	<div class="info">
	        <a href="#register" title="Registrarme" onclick="changeForm('register')">¿No tienes Cuenta? Registrate Aquí</a>
   		</div>
        <form method="post" id="formLogin">
            <div class="card-body rounded">
                <p>¡Hola! Ingresa tus datos para Iniciar Sesión</p>
                    <div class="mb-4">
                        <input id="email" type="email" class="form-contorl" name="email" required autocomplete="email" autofocus placeholder="Correo Electrónico">
                    </div>
                    <div class="mb-4">
                        <input id="password" type="password" class="form-contorl" name="password" required autocomplete="current-password" placeholder="Contraseña">
                    </div>
            </div>
            <button type="submit" class="btn red-gradient">Iniciar Sesión</button>
        </form>
    </div>

    <div class="card d-none" id="register">
    	<div class="info">
	        <a href="#login" title="Iniciar Sesión" onclick="changeForm('login')">Poseo una cuenta</a>
   		</div>
        <form method="post" id="formRegister">
            <div class="card-body rounded">
                <p>Registra tus datos para ingresar</p>
                    <input type="hidden" name="id_user" value="<?php echo $_GET['distributor']?>">
                    <div class="mb-4">
                        <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus placeholder="Nombre">
                    </div>
                    <div class="mb-4">
                        <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus placeholder="Correo Electrónico">
                    </div>
                    <div class="mb-4">
                        <input  type="password" class="form-control" name="password" id="passwordRegister" required autocomplete="current-password" placeholder="Contraseña">
                    </div>
                    <div class="mb-4">
                         <input  type="password" class="form-control" id="confirmPasswordRegister" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                    </div>
            </div>
            <button type="submit" class="btn red-gradient">Registrarse</button>
        </form>
    </div>
</section>

<script type="text/javascript" src="dist/js/jquery.js"></script>
<script type="text/javascript" src="dist/js/login.js"></script>
<?php } ?>