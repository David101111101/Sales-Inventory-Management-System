<?php


  $nombre = $_POST['TXTnomBRE'];
$correoUSU= $_POST['TXTcorreo'];
$nomUSUARIO =$_POST['TXTnomUSU'];
$clave = $_POST['TXTcontra'];
 $identificacion = $_POST['TXTidentificacion'];
 $CIUDAD =$_POST['CIUDAD'];
 $TELEFONO =$_POST['TXTTELEFONO'];
 $DIRECCION =$_POST['TXTDIRECCION']; 
 $cargo =$_POST['TXTCARGO'];
 $estado =$_POST['TXTESTADO'];
 
 

$Nidenti= strlen($identificacion); 
    if ($Nidenti < 10)
     {
       echo '<script> alert("LA IDENTIFICACION NO DEBE SER MENOR A 10 CARACTERES");			
                  	    location.href="../presentacion/nuevoUSUadmin.php"
					  </script>';
       }
ELSE
{
}
 
 

require "../DATOS/coneccion.php";
$msgOk="";
$sql="insert into usuarios values ('$nombre','$correoUSU','$nomUSUARIO','$clave','$identificacion',' $CIUDAD','$TELEFONO','$DIRECCION','$cargo','$estado')";
mysql_query($sql);
$destinatario = $_POST['TXTcorreo'];
$asunto="INGRESO A ARCLAD S.A";
$cuerpo= '
<html ><head><style type="text/css"></style></head>
<body><table width="471" border="1">
  <caption align="top">&nbsp;  </caption>  <tr>
  <th width="461" scope="col" COLOR="RED"><span class="Estilo1"></span> BIENVENIDO A ARCLAD S.A</th> </tr> <tr>  
  <td><table width="462" border="1">      <tr>
  <th width="241" height="46" scope="col">SU NOMBRE DE USUARIO ES: </th>
  <th width="205" scope="col"><?$nomUSUARIO  ?></th>      </tr>      <tr>
  <th width="241" height="46" scope="col">SU CONTRASE&Ntilde;A ES:</th>
  <td><?$clave?></td>      </tr>    </table></td>  </tr>   </body></html>
  ';
$cabeceras.="MIME-Version: 1.0\r\n";
$cabeceras.="Content-type: text/html; charset=150-8859-1\r\n";
$cabeceras.="FROM: ARCLAD@ARCLADSA.COM";
if (mail($destinatario,$asunto,$cuerpo,$cabeceras))
{
$msgOk="<MARQUEE><H2>el usuario  '$nomUSUARIO' se guardo exitosamente revise su correo para la confirmacion </H2></MARQUEE>";
}
ELSE
{
$msgOk="ERROR EN EL ENVIO DE SU CORREO INTENTE OTRA VEZ";
}





?>
<html>
<head>
<title>REGISTRO</title>

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
						<strong class="slog">La Mejor Calidad</strong>					</h1>
					<form id="search-form" method="post" enctype="multipart/form-data">
						<fieldset>
							<div class="search-form">					
								<input type="text" name="search" value="Type Keyword Here" onBlur="if(this.value=='') this.value='Type Keyword Here'" onFocus="if(this.value =='Type Keyword Here' ) this.value=''" />
								<a href="#" onClick="document.getElementById('search-form').submit()">Search</a>							</div>
						</fieldset>
					</form>
				</div>
				<div class="row-2">
					<nav>
						<ul class="menu">
						  <li><a class="active" href="../presentacion/index.php">INICIO</a></li>
						  <li><a href="../presentacion/nosotros.php">NUESTRA EMPRESA</a></li>
						  <li><a href="../presentacion/servicios.php">NUESTROS SERVICIOS</a></li>
						  <li><a href="../presentacion/productos.php">PRODUCTOS</a></li>
						  <li class="last-item"><a href="../presentacion/contactenos.php">CONTACTENOS</a></li>
						</ul>
					</nav>
				</div>
			</header>
			
			
			
			<section id="content">
				<div class="padding">
					<div class="wrapper margin-bot">
						<div class="col-3">
							<div class="indent">
							
							<input type="hidden" name="confirmar" value="si"/>
							<BR><BR><BR><BR><BR><BR>
							<b style="color: green" size=70>
							 <?php echo $msgOk;?></b>
							<BR><BR><BR><BR><BR><BR>
							<BR><BR><BR><BR><BR><BR>							
							<BR><BR><BR><BR><BR><BR>
							
							
							
							
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
<SCRIPT> 
function MENSAJEeRROR () 
{
alert("DEBE INGRESAR TODOS LOS CAMPOS PARA REGISTRARSE") 
return false;
}



</SCRIPT>