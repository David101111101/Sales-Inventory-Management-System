

<?php
$msgOk="";
$msgOk123="";
$msgErr="";
$msgOk123="INGRESE SU NOMBRE DE USUARIO Y SU CLAVE SE ENVIARA AL CORREO QUE USTED INGRESO EN LA REGISTRACION ";
$NOMusu=$_REQUEST['txtnomUSU'];



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
						 <li><a class="active" href="index.php" title="return home">INICIO</a></li>						 
						  <li><a href="nosotros.php" title="about us">NUESTRA EMPRESA</a></li>
						  <li><a href="servicios.php" title="our services">NUESTROS SERVICIOS</a></li>
						  <li><a href="productos.php" title="produce">PRODUCTOS</a></li>
						  <li class="last-item"><a href="contactenos.php" title="contact">CONTACTENOS</a></li>
						</ul>
					</nav>
				</div>
				
			</header>
				<CENTER>
			<section id="content">
				<div class="padding">
					<div class="wrapper margin-bot">
						<div class="col-3">
							<div class="indent"><BR><BR><BR>
						
<form NAME="recuperarClave" method="post"  ACTION="../negocio/OLVIDOSUCLAVE1.PHP">
<BR><BR><BR>
<tr>
<b style="color: BLUE" size=90>
<?php echo $msgOk123;?>
<BR>

<HR>
<font style="color: red" ><strong><th>INGRESE SU NOMBRE DE USUARIO </th></font><BR></strong>

<td><input type="text" name="txtnomUSU" ID="txtnomUSU"/></td>
</tr>
<HR>
 <input type="submit" value="CONTINUAR" /><br><br>
 
<input type="hidden" name="confirmar" value="si"/>

</form>



<b style="color: GREEN" size=60>
<?php echo $msgOk;?>
</b>

<b style="color: red" size=60>
<?php echo $msgErr;?>
</b>
</CENTER>
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
<SCRIPT>
function validar() 
{
nomUSUARIO= document.getElementById("txtnomUSU").value;
if (nomUSUARIO=="") 
      {
       alert("INGRESE UN NOMBRE");
	   document.forms.recuperarClave.submit() ;
	  return false;
	  
	  }
</script>