
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
						  <li><a class="active" href="index.php" title="return home">INICIO</a></li>						 
						  <li><a href="nosotros.php" title="USERS">GESTIONAR USUARIOS</a></li>
						  <li><a href="servicios.php" title="SOLD">GESTIONAR VENTAS</a></li>
						  <li><a href="../NEGOCIO/ejemplo_grafico.PHP" title="ejemplo grafico">ESTADISTICAS</a></li>
						  <li class="last-item"><a href="contactenos.php" title="contact">CONTACTENOS</a></li>
						</ul>
					</nav>
				</div>
				
			</header>
			
			<?php

include "../negocio/FusionCharts.php";
include "../negocio/Functions.php";
// Inicializo las variables a utilizar.las 4 barras.
$dia1 =200;
$dia2 = 400;
$dia3 = 200;
$dia4 = 600;
// $strXML: Para concatenar los parámetros finales para el gráfico.
$strXML = "";
$strXML = "<chart caption = 'sus ventas en los pasados 4 dias' bgColor='#CDDEE5' baseFontSize='12' showValues='1' xAxisName='VENTAS' >";
//  color que tendrá cada barra. 
$strXML .= "<set label = 'DIA 1' value ='".$dia1."' color = 'EA1000' />";
$strXML .= "<set label = 'DIA 2' value ='".$dia2."' color = '6D8D16' />";
$strXML .= "<set label = 'DIA 3' value ='".$dia3."' color = 'FFBA00' />";
$strXML .= "<set label = 'DIA 4' value ='".$dia4."' color = '0000FF' />";
$strXML .= "</chart>";

// renderChartHTML: función que se encuentra en el archivo FusionCharts.php
// 1er parámetro: indica la ruta y nombre del archivo "swf" que contiene el gráfico. En este caso Columnas ( barras) 3D
// 2do parámetro: indica el archivo "xml" a usarse para graficar. En este caso queda vacío "", ya que los parámetros lo pasamos por PHP.
// 3er parámetro: $strXML, es el archivo parámetro para el gráfico. 
// 4to parámetro: "ejemplo". Es el identificador del gráfico. Puede ser cualquier nombre.
// 5to y 6to parámetro: indica ancho y alto que tendrá el gráfico.
// 7mo parámetro: "false". Trata del "modo debug". No es im,portante en nuestro caso, pero pueden ponerlo a true ara probarlo.
echo renderChartHTML("Column3D.swf", "",$strXML, "ejemplo", 500, 400, false);
?>
			
			
			
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