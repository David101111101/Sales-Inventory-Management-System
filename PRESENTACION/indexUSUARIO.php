<?php session_start();
echo $_SESSION['usuario'];
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
						  <li><a class="active" href="index.php" title="LA SECION SE CERRARA">INICIO</a></li>						 
						  <li><a href="nosotros.php" title="NOSOTROS">NUESTRA EMPRESA</a></li>
						  <li><a href="datosUSuario.php" title="EDITE SUS DATOS PERSONALES">SUS DATOS</a></li>
						  <li><a href="productosUSU.php" title="COMPRE NUESTROS PRODUCTOS">PRODUCTOS</a></li>
						  <li class="last-item"><a href="contactenos.php" title="contactenos">CONTACTENOS</a></li>
						</ul>
					</nav>
				</div>
				<div class="row-3">
					<div class = "slider-wrapper">
						<div class="slider">
						  <ul class="items">
							<li><img src="images/1.jpg" alt="" align="left">
									<strong class="banner">
									<strong class="b1">nuestro compromiso </strong>
									<strong class="b1">es el buen servicio</strong>
									</strong>
							</li>
							
								<li><img src="images/8.jpg" alt="" align="left">
									<strong class="banner">
									<strong class="b1">La Mano de Obra</strong>
									<strong class="b1">es Excepcional</strong>
									</strong>
							</li>
							
							</li>
							
								<li><img src="images/3.jpg" alt="" align="left">
									<strong class="banner">
									<strong class="b2">nuestra mision</strong>
									<strong class="b1">Lograr la Excelencia</strong>
									</strong>
							</li>
							
							
							<li><img src="images/2.jpg" alt="">
								<strong class="banner">
								<center>
									<strong class="b1">nuestros</strong>
									<strong class="b2">productos</strong>
									<strong class="b1">son de alta calidad</strong>
																	</strong>
							</li>
													  </ul>
						  <a class="prev" href="#">prev</a>
						  <a class="next" href="#">prev</a>
						</div>
					</div>
				</div>
			</header>
			<section id="content">
				<div class="padding">
				
					<div class="box-bg margin-bot">
						<div class="wrapper">
							<div class="col-1">
								<div class="box first">
									<div class="pad">
										<div class="wrapper indent-bot">
										       										
													
													
													
													
													<form name="inicioSecion"  ACTION="index.php" >
												
															<div class="extra-wrap"><BR>
												           <h3 class="color-1">BIENVENIDO</h3>
											         </div>
													 <b style="color: green" size=70>
													 <?php echo $msgOk;?></b>	
													 
										</div>
										                <div class="wrapper">
									                   
											                
															      <input type="submit" class="button img-indent-r"  />
														<H4> <font style="color: red"><strong>Cerrar Secion</font><BR></strong>		</H4>
												            
														
																		 
																		 <b style="color: red" size=80>
													 <?php echo $msgErr;?></b>	
													        </div>    
															<input type="hidden" name="confirmar" value="si"  disabled="disabled"/>
													</form>
													
													
													
													
													
													
													
													
											
									</div>
								</div>
							</div>
							<div class="col-1">
								<div class="box second">
									<div class="pad">
										<div class="wrapper indent-bot">
											<strong class="numb img-indent2">02</strong>
											<div class="extra-wrap">
												<h3 class="color-2"><strong>Seleccione </strong>Producto</h3>
											</div>
										</div>
										<div class="wrapper">
											<a href="productosUSU.php" class="button img-indent-r" href="#"></a>
											<div class="extra-wrap">
												Seleccione el producto que desea comprar
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-2">
								<div class="box third">
									<div class="pad">
										<div class="wrapper indent-bot">
											<strong class="numb img-indent2">03</strong>
											<div class="extra-wrap">
												<h3 class="color-3"><strong>generar</strong>pedido</h3>
											</div>
										</div>
										<div class="wrapper">
											<a href="pedVenta.php" class="button img-indent-r" href="#"></a>
											<div class="extra-wrap">
												Genere el pedido de venta para ordenar su producto
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="wrapper">
						<div class="col-3">
							<div class="indent">
								<h2>Nuestra Mision</h2>
								<p class="color-4 p1">Nuestra mision es garantizar que nuestros productos sean los mejores y con gran calidad en el mercado no solo nacionalmente sino a futoro lograr clientes internacionales los cuales tendran una mejor imagen de lo que es la compañia y el pais
								</p>
								<div class="wrapper">
									<figure class="img-indent3"><img src="images/page1-img1.png" alt="" /></figure>
									<div class="extra-wrap">
										<div class="indent2">
											Creamos valor y un mundo mejor mediante soluciones competitivas de empaques ecológicos. Somos una Corporación comprometida con el bienestar de la gente.
										</div>
									</div>
								</div>
								<!-- <a class="button-2" href="#">Read More</a> -->
							</div>
						</div>
						<div class="col-2">
							<div class="block-news">
								<h3 class="color-4 p2">Productos</h3>
								<div class="wrapper p2">
									<time class="tdate-1 fleft" datetime="2011-05-29"><strong>AA1</strong></time>
									<div class="extra-wrap">
										<h5> bandeja blanca</h5> 
										bandeja blanca con un costo de $100 la unidad de primera calidad <a href="productosUSU.php">MAS</a>
									</div>
								</div>
								<div class="wrapper">
									<time class="tdate-1 fleft" datetime="2011-05-24"><strong>AA2</strong></time>
									<div class="extra-wrap">
										<h5>bandeja griz</h5> 
										bandeja gris con un costo de $50 de segunda calidad <a href="productosUSU.php">MAS</a>
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

</script>
	</body>
</html>