<html lang="en">
<head>
<title>ENVIENOS SUS COMENTARIOS</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script> 
<script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script> 
<script src="js/FF-cash.js" type="text/javascript"></script>  
</head>

<body id="page5">
	<div class="bg">
		<div class="main">
			<header>
				<div class="row-1">
					<h1>
						<strong class="footer-logo">ARCLAD</strong>
						<strong class="slog">La Mejor Calidad</strong>
					</h1>
					<form id="search-form" method="post" enctype="multipart/form-data">
						<fieldset>
							<div class="search-form">					
								<input type="text" name="search" value="Type Keyword Here" onBlur="if(this.value=='') this.value='Type Keyword Here'" onFocus="if(this.value =='Type Keyword Here' ) this.value=''" />
								<a href="#" onClick="document.getElementById('search-form').submit()">Search</a>									
							</div>
						</fieldset>
					</form>
				</div>
				<div class="row-2">
					<nav>
						<ul class="menu">
						  <li><a class="active" href="index.php">INICIO</a></li>
						  <li><a href="nosotros.php">NUESTRA EMPRESA</a></li>
						  <li><a href="servicios.php">NUESTROS SERVICIOS</a></li>
						  <li><a href="productos.php">PRODUCTOS</a></li>
						  <li class="last-item"><a href="contacts.php">CONTACTENOS</a></li>
						</ul>
					</nav>
				</div>
			</header>

			<section id="content">
				<div class="padding">
					<div class="wrapper margin-bot">
						<div class="col-3">
							<div class="indent">
								<h2 class="p0">CONTACTENOS</h2>
								<form action="../NEGOCIO/contacPHP.php" method="post" enctype="multipart/form-data" name="contact-form" id="contact-form">					
									<fieldset>
									

										<label><span class="text-form">NOMBRE </span><input name="nombre" type="text" /></label>
										<label><span class="text-form">SU EMAIL:</span><input name="email" type="text" /></label> 
                                        <label><span class="text-form">ASUNTO:</span><input name="asunto" type="text" /></label> 										
										<div class="wrapper"><div class="text-form">MENSAJE:</div><textarea name="mensaje"></textarea></div>
										<div class="buttons">
										
											<a class="button-2" href="#" onClick="document.getElementById('contact-form').reset()">BORRAR CAMPOS</a>
											<a class="button-2" href="#" onClick="document.getElementById('contact-form').submit()">ENVIAR</a>
											
											
											
										</div>									 
									</fieldset>						
							  </form>
							</div>
							
						</div>
						
					</div>
					
						</div>
					</div>
				</div>
			</section>
<!-- footer -->
			<footer>
				<div class="row-top">
					<div class="row-padding">
						<div class="wrapper">
							<div class="col-1">
							    <h4>DIRECCION:</h4>
								<dl class="address">
									<dt><span>PAIS:</span>Colombia</dt>
									<dd><span>CIudad:</span>Medellin</dd>
									<dd><span>Direccion:</span>kilometro 34 autopista medellin bogota</dd>
									<dd><span>Email:</span><a href="#">Arclad@Arclad.com</a></dd>
								</dl>
								</div>
							<div class="col-2">
								<h4>Follow Us:</h4>
								<ul class="list-services">
									<li class="item-1"><a href="#">Facebook</a></li>
									<li class="item-2"><a href="#">Twitter</a></li>
									<li class="item-3"><a href="#">LinkedIn</a></li>
								</ul>
							</div>
							<div class="col-3">
								<h4>Por Que Nosotros</h4>
								<ul class="list-1">
									<li><a href="#">Hacemos productos de alta calidad</a></li>
									<li><a href="#">La perfeccion es nuestra regla</a></li>
									
																	</ul>
							</div>
							<div class="col-4">
								<div class="indent3">
									<strong class="footer-logo">ARCLAD</strong>
									<strong class="phone"><strong>Telefono : </strong>5303055</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row-bot">
					<b style="color:blue "><h3><?php echo $si ?></h3></b>
				</div>
			</footer>
		</div>
	</div>

</body>





</html>

