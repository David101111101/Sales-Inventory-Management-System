<?php session_start();

?>
<?


 $NombreUSU = $_SESSION['usuario'];


include '../DATOS/coneccion.php';
$consulta ="SELECT * FROM usuarios WHERE nomUSU='".$NombreUSU."'";
  $result = mysql_query($consulta);
    $row = mysql_fetch_array($result);	
		  
	   	   $NombreCompleto = $row[0];
	
		 


?>


<html>
<head>
<title>ARCLAD</title>
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
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script src="js/FF-cash.js" type="text/javascript"></script>
</head>
<body id="page1">
<!-- header -->
	<div class="bg">
		<div class="main">
			<header>
				<div class="row-1">
					<h1>
						<strong class="footer-logo">ARCLAD</strong>
						<strong class="slog">La Mejor Calidad</strong>
					</h1>
					<form id="search-form" action="" method="post" enctype="multipart/form-data">
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
						  <li><a class="active" href="index.php" title="SE CERRARA LA SESION">INICIO</a></li>						 
						  <li><a href="GESTIONUSUARIOS.php" title="CONTROLE SUS USUARIOS">GESTIONAR USUARIOS</a></li>
						  <li><a href="GESTIONventas.php" title="CONTROLE SUS VENTAS">GESTIONAR VENTAS</a></li>
						  <li><a href="../NEGOCIO/ejemplo_grafico.PHP" title="ejemplo grafico">ESTADISTICAS</a></li>
						  <li class="last-item"><a href="contactenos.php" title="contact">CONTACTENOS</a></li>
						</ul>
					</nav>
				</div>
				
			</header>
			
			<section id="content">
				<div class="padding">
				<div class="wrapper margin-bot">
						<div class="col-3">
							<div class="indent">

							<center><STRONG> BIENVENIDO <font style="color: black" ><?echo $NombreCompleto;?> </font></STRONG><center>
			<br><br>		<BR><BR>	<BR><BR>		
<strong><h3> gestionar Usuarios: </h3></strong>			<BR><BR>								
<font style="color: red"><strong>con esta funcion podra generar un reporte de todos los datos de los usuarios que su empresa tiene , podra cambiar el estado de un usuario					 </font><BR></strong>			
							
				
							
							
			<br><br>			
<strong><h3> gestionar Ventas: </h3></strong>		<BR><BR>				
	<font style="color: red"><strong>Con esta funcion podra generar un reporte de todas las ventas que su empresa ha generado ,
	podra  actualizar una venta cambiando un dato mal ingresado y podra ingresar una nueva venta con sus respectivos datos  <BR><BR>
    (USTED DEBERA EDITAR LOS PEDIDOS DE VENTA PARA AGREGAR LA FECHA DE DESPACHO Y EL PLAZO DE PAGO)	</font><BR></strong>						
							
							
			<br><br>			
<strong><h3> Estadisticas: </h3></strong>		<BR><BR>				
	<font style="color: red"><strong>Con esta funcion podra consultar sus ventas en los ultimos 4 dias en un diagrama de barras generado automaticamente haci sabra cuando se hizo la ultima venta   </font><BR></strong>						
								
							
<br>

					<BR><BR><BR><BR><BR><BR>
							
							
							
							
							
							
							
							
								</div>
									</div>							
						</div>						
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
					<div class="aligncenter">
						</div>
				</div>
			</footer>
		</div>
	</div>
	<script type="text/javascript"> Cufon.now(); </script>
	<script type="text/javascript">
		$(function(){
			$('.slider')._TMS({
				prevBu:'.prev',
				nextBu:'.next',
				playBu:'.play',
				duration:800,
				easing:'easeOutQuad',
				preset:'simpleFade',
				pagination:false,
				slideshow:3000,
				numStatus:false,
				pauseOnHover:true,
				banners:true,
				waitBannerAnimation:false,
				bannerShow:function(banner){
					banner
						.hide()
						.fadeIn(500)
				},
				bannerHide:function(banner){
					banner
						.show()
						.fadeOut(500)
				}
			});
		})