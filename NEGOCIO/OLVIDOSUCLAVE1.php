<?require "../DATOS/coneccion.php";
$NOMusu = $_POST['txtnomUSU'];

      if ($NOMusu == "" )
        {
					 echo '<script> alert("debe ingresar un USUARIO para continuar en el proceso");
					  location.href="../presentacion/OLVIDOSUCLAVE.php"
					  </script>';	
			             
        }
        else
        {
	             
				 $sql =  mysql_query("select nombre FROM usuarios Where nomUSU ='$NOMusu'");
				 ECHO $sql;
             if(mysql_num_rows($sql)>=1) 
			 {
			      
						 
$sql="SELECT  usuarios.nomUSU , correo , passUSU FROM USUARIOS  WHERE nomUSU= ('$NOMusu')";
$res=mysql_query($sql);
$row = mysql_fetch_array($res);	

$NOMusu = $row["nomUSU "];
$CLAVE = $row["passUSU"];
$correoUSU = $row["correo"];

$destinatario = $correoUSU;
$asunto="SU CONTRASEÑA EN ARCLAD S.A";
$cuerpo= '
<html ><head><style type="text/css"></style></head>
<body><table width="471" border="1">
  <caption align="top">&nbsp;  </caption>  <tr>
  <th width="461" scope="col" COLOR="RED"><span class="Estilo1"></span> BIENVENIDO A ARCLAD S.A</th> </tr> <tr>  
  <td><table width="462" border="1">      <tr>
  <th width="241" height="46" scope="col">SU NOMBRE DE USUARIO ES: </th>
  <th width="205" scope="col">'.$NOMusu.'</th>      </tr>      <tr>
  <th width="241" height="46" scope="col">SU CONTRASE&Ntilde;A ES:</th>
  <td><'.$CLAVE.'</td>      </tr>    </table></td>  </tr>   </body></html>
  ';
$cabeceras.="MIME-Version: 1.0\r\n";
$cabeceras.="Content-type: text/html; charset=150-8859-1\r\n";
$cabeceras.="FROM: ARCLAD@ARCLADSA.COM";

if (mail($destinatario,$asunto,$cuerpo,$cabeceras))
{
$msgOk="EL PROCESO CONCLUYO EXITOSAMENTE REVISE SU CORREO PARA LA CONFIRMACION";
}
ELSE
{
$msgERROR="ERROR  INTENTELO DENUEVO";
}



		
			 }                  
						
	ELSE
	{
	echo '<script> alert("El Nombre de usuario no Existe  Porfavor Ingrese Otro);					 
					  </script>';	
	}
	
        }



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
						  <li><a class="active" href="../PRESENTACION/indexADMIN.php" title="return home">INICIO</a></li>						 
						  <li><a href="../PRESENTACION/GESTIONUSUARIOS.php" title="USERS">GESTIONAR USUARIOS</a></li>
						  <li><a href="../PRESENTACION/servicios.php" title="SOLD">GESTIONAR VENTAS</a></li>
						  <li><a href="ejemplo_grafico.PHP" title="ejemplo grafico">ESTADISTICAS</a></li>
						  <li class="last-item"><a href="../PRESENTACION/contactenos.php" title="contact">CONTACTENOS</a></li>
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
							
							
							
							<b style="color: GREEN" size=60>
<?php echo $msgOk;?>
</b>

							<b style="color: RED" size=70>
<?php echo $msgERROR;?>
</b>
							
							
							
							<BR><BR><BR>
							
							
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


</script>