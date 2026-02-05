<?php session_start();

$nomUSU=$_SESSION['usuario'];
require "../DATOS/coneccion.php";

$sql="SELECT * FROM usuarios where nomUSU ='$nomUSU' ";

$res=mysql_query($sql);
$registro=mysql_fetch_assoc($res);



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
						  <li><a href="DATOSusuarios.php" title="COMPRE NUESTROS PRODUCTOS">PRODUCTOS</a></li>
						  <li class="last-item"><a href="contactenos.php" title="contactenos">CONTACTENOS</a></li>
						</ul>
					</nav>
				</div>
				
			</header>
			
			<section id="content">
				<div class="padding">
					<div class="wrapper margin-bot">
						<div class="col-3">
							<div class="indent"><BR><BR><BR><BR><BR><BR>
							
	
	                    <form name="datos" method="post" action="../negocio/datosUsuario.php">
	
                                 <font style="color: red" ><strong>nombre completo:</font><BR></strong>
								 <input type="text"  name="TXTnomBRE" id="TXTnomBRE" size="30" onkeyPress='return valideLetra(event)'value='<?php echo $registro['nombre'];?>'/><BR>
								<font style="color: red" ><strong>su correo:</font><BR></strong>
								<input type="text" name="TXTcorreo"  id="TXTcorreo" size="30" onchange='return valideEmail(this)' value='<?php echo $registro['correo'];?>'>
								<BR>
								<font style="color: red" ><strong>clave de Usuario:</font><BR></strong>
								<input type="text" name="TXTclaveUSU" id="TXTclaveUSU" size="30" value='<?php echo $registro['passUSU'];?>'>
								<BR></b>
								<font style="color: red" ><strong>cedula:</font><BR></strong>
								<input type="TEXT" name="TXTidentificacion" id="TXTidentificacion" size="30" onkeyPress='return valideNumero(event)' value='<?php echo $registro['identificacion'];?>'>
								<BR>
								<font style="color: red" ><strong>ciudad :</font><BR></strong>
								<input type="text" name="TXTciudad" id="TXTciudad" onkeyPress='return valideLetra(event)'size="30" value='<?php echo $registro['ciudad'];?>'>
									<BR>	
								<font style="color: red" ><strong>telefono :</font><BR></strong>
								<input type="text" name="TXTtelefono" id="TXTtelefono" size="30" onkeyPress='return valideNumero(event)'value='<?php echo $registro['telefono'];?>'>
									<BR>
								<font style="color: red" ><strong>direccion :</font><BR></strong>
								<input type="text" name="TXTdireciion" id="TXTdireciion" size="30" value='<?php echo $registro['direccion'];?>'>
									<BR>
									


                                <INPUT TYPE="SUBMIT" NAME="ACTUALIZARDATOS" VALUE="ACTUALIZAR DATOS">
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
					<div class="aligncenter">
						</div>
				</div>
			</footer>
		</div>
	</div>
	
	
	
<script>
function valideEmail(objeto)
{
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(objeto.value))
	{
		return (true);
	} 
	else 
	{
		x=objeto.value;
		if (x=x.length!=0){
			alert("La Dirección de E-mail es Incorrecta.");
			return (false);
		}

	}
}

function valideNumero(evt){
    var K=evt.keyCode;
    return((K<13)||(K>=48&&K<=57));
   /* ---------------------------------------
	Valida los ASCII que se digitan, asi:
	DIGITO	0 - 9	-> 	ASCII 48 a 57
		 ?? 	->	       0 a 13
      --------------------------------------- */
}

function valideLetra(evt){
    var K=evt.keyCode;
    return((K<13)||(K>=97&&K<=122)||(K>=65&&K<=90)||(K==32)||(K==241)||(K==209));
   /* ---------------------------------------
   	Valida los ASCII que se digitan, asi:
	DIGITO	A - Z	-> 	ASCII 65 a 90
		a - z	-> 	      97 a 122 
		? - ?	->	      209, 241 (Unicode)
		" "	->	       32
      --------------------------------------- */
}

</script>