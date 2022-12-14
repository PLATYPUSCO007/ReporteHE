<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Horas Extra</title>
    <link rel="stylesheet" href="assets/css/main.css" />

    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="./assets/js/login.js"></script>
</head>
<body class="is-preload landing">
    <div id="page-wrapper">
        <section id="two" class="spotlight style2 right">
		    <span class="image fit main">
                <img async src="images/pic10.webp" alt="" />
                <a href='https://www.freepik.es/fotos/asociacion'>Foto de asociacion creado por rawpixel.com - www.freepik.es</a>
            </span>
		    <div class="content">
		    	<header>
		    		<h2 style="color: white;">Ingreso Reporte de Horas Extra</h2>
		    		<p>Bienvenido!</p>
		    	</header>
		    	<p style="color: white;"> Digite las credenciales de su equipo</p>
                <form method="" action="#" id="login">
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-12 col-12-xsmall">
							<input type="text" name="user" class="loginInput" id="user" value="" placeholder="Nombre de Usuario" />
						</div>
						<div class="col-12 col-12-xsmall">
							<input type="password" name="pass" class="loginInput" id="pass" value="" placeholder="Contraseña" />
						</div>
                        <div class="col-12">
                            <ul class="actions">
								<li><input type="submit" value="Ingresar" class="primary" id="send"/></li>
							</ul>
                        </div>
                    </div>
                </form>
		    </div>
		</section>

        
	    <script src="assets/js/jquery.scrolly.min.js"></script>
	    <script src="assets/js/jquery.dropotron.min.js"></script>
	    <script src="assets/js/jquery.scrollex.min.js"></script>
	    <script src="assets/js/browser.min.js"></script>
	    <script src="assets/js/breakpoints.min.js"></script>
	    <script src="assets/js/util.js"></script>
	    <script src="assets/js/main.js"></script>
        <script src="assets/js/notify.min.js"></script>
    
        <?php include_once('./view/shared/footer.php')?>

    </div>

</body>
</html>