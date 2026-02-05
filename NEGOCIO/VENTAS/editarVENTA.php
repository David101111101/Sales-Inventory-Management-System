<?require "../../DATOS/coneccion.php"?>
<?PHP
$confirmar=$_REQUEST['confirmar'];
if ($confirmar=="si")
{

$cod_pedido=$_REQUEST["codPedido"];
$fecha_orden=$_REQUEST["fechaOrden"];
$cantidad_productos=$_REQUEST["cantProduct"];
$plazoPago=$_REQUEST["plazoPago"];
$fecha_despacho=$_REQUEST["despacho"];
$sql="update pedido_venta set cod_pedido='".$cod_pedido."',
                        fecha_orden='".$fecha_orden."',
					    cantidad_productos='".$cantidad_productos."',
					    plazoPago='".$plazoPago."',
						fecha_despacho='".$fecha_despacho."'						
	where 	 cod_pedido='$cod_pedido'";	

			   	 		 
$res=mysql_query($sql);

Echo '<script> alert("LOS DATOS DEL PEDIDO DE VENTA SE ACTUALIZARON EXITOSAMENTE");
					  location.href="../../PRESENTACION/GESTIONventas.php"
					  </script>';



}
$IDpedido=$_REQUEST['IDPEDIDO'];
echo $IDpedido;
$sql="SELECT * FROM pedido_venta WHERE cod_pedido='".$IDpedido."'";

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
						  <li><a class="active" href="../../PRESENTACION/indexADMIN.php" title="return home">INICIO</a></li>						 
						  <li><a href="../../PRESENTACION/GESTIONusuarios.php" title="USERS">GESTIONAR USUARIOS</a></li>
						  <li><a href="../NEGOCIO/servicios.php" title="SOLD">GESTIONAR VENTAS</a></li>
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
							<div class="indent"><BR><BR>
							
							<H2>EDITAR</H2>
<form method="post" onsubmit="return validar()">
<BR><BR><BR>
<tr>
<CENTER>
<STRONG>

<th><font color="black">codigo del pedido</font></th>
<td><input type="text" name="codPedido"  id="codPedido" value='<?php echo $registro['cod_pedido'];?>' /></td>
</tr>
<tr>
<BR>
<BR>

<th><font color="black">fecha de la orden</font></th>
<td><input type="text" name="fechaOrden" id="fechaOrden" value='<?php echo $registro['fecha_orden'];?>'/></td>
</tr>
<BR>
<BR>

<th><font color="black">cantidad productos</font></th>
<td><input type="text" name="cantProduct" id="cantProduct" value='<?php echo $registro['cantidad_productos'];?>'/></td>
</tr>
<BR>
<BR>

<th><font color="black">plazo de pago</font></th>
<td><input type="text" name="plazoPago"  id="plazoPago" value='<?php echo $registro['plazoPago'];?>'/></td>ejemplo: 20/06/2012
</TR>
<BR>
<BR>

<th><font color="black">fecha de despacho</font></th>
<td><input type="text" name="despacho" id="despacho" value='<?php echo $registro['fecha_despacho'];?>'/></td>ejemplo: 26/07/2012
</tr>
<BR>
<BR>



<input type="submit" value="ACTUALIZAR" ONMOUSEOVER="validar()">

<input type="hidden" name="confirmar" value="si"/>
</CENTER>
</STRONG>
<BR>
</form>

<b style="color: red" size=60>
<?php echo $msgOk;?>
</b>
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
		
<script>
function validar () 
{
usuario= document.getElementById("txtnombre").value; 
if (usuario=="") 
     {
      alert("DEBE INGRESAR UN NOMBRE ");
	  return false;
     }
NOMusu= document.getElementById("TXTnomUSU").value; 

if (NOMusu=="")
     {
	 alert("INGRESE UN NOMBRE DE USUARIO")
	 return false;
	 }
	 
CLAVE= document.getElementById("TXTpassUSU").value; 
if (CLAVE=="")
     {
	 alert("INGRESE UNA CLAVE")
	 return false;
	 }

		
</script>