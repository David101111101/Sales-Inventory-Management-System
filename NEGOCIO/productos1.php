<?php session_start();
$nombreUSUARIO1= $_SESSION['usuario'];
?>
<?php
 include "../DATOS/coneccion.php"; 


$consulta ="SELECT nombre FROM usuarios WHERE nomUSU='".$nombreUSUARIO1."' ";

  $result = mysql_query($consulta, $link);
    $row = mysql_fetch_array($result);	 
 
 
 $nombreCompleto=$row['nombre'];
 $fecha1 = date("d/m/Y");
$NOMBREbandeja = $_GET["var"];
$confirm=$_REQUEST["confirmar"];
if ($confirm == 'si')
 {
 $NOMBRE=$_REQUEST['TXTnomBRE'];
$sql =  mysql_query("select nombre FROM usuarios Where nombre='$NOMBRE'");
             if(mysql_num_rows($sql)>=1) 
                   {

   $msgOK="El Nombre Con El Cual Se Quiere Registrar ya Existe  Porfavor Ingrese Otro";
					  
                 }
                    else
                    {
					$cod_Pedido  ="null";
					$fecha=$fecha1;
					$cantidad=$_REQUEST['TXTcant'];
					$PlazoPago = $_POST['plazoPago'];
					$FechaDespacho="";
					$nombre1=$nombreCompleto;
					
					
				$sql="insert into pedido_venta values('$cod_Pedido','$fecha','$cantidad','$PlazoPago','$FechaDespacho','$nombreCompleto')";					
echo $sql;
mysql_query($sql);

}
}

?>
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
						  <li><a class="active" href="../presentacion/index.php">INICIO</a></li>
						  <li><a href="../presentacion/nosotros.php">NUESTRA EMPRESA</a></li>
						  <li><a href="../presentacion/servicios.php">NUESTROS SERVICIOS</a></li>
						  <li><a href="../presentacion/productos.php">PRODUCTOS</a></li>
						  <li class="last-item"><a href="../presentacion/contacts.php">CONTACTENOS</a></li>
						</ul>
					</nav>
				</div>
			</header>
			
			<section id="content">
				<div class="padding">
					<div class="wrapper margin-bot">
						<div class="col-3">
							<div class="indent"><BR><BR><BR><BR><BR><BR>
					<center>
							<h2>Confirme Su Compra</h2><br><br>
				
				
				<form  method="post" name="nuevoUSU" id="nuevo" >	
				
								  <b style="color: red" size=70><?php echo $msgOK;?>       </b>        <br><br>
								<font style="color: red" > Porfavor Llene Todos los Campos Para Finalizar El Proceso  </font><BR></strong><BR><BR><BR>
								
								
								<font style="color: red" ><strong>Su Nombre :</font><BR></strong>
								<input  type="text" name="nombre" id="nombre" size="35" maxlength="30" disabled="disabled" value="<?php echo $row['nombre']?>" /><br />
								<br><font style="color: red" ><strong>CIUDAD</font><BR></strong>				 
								<select>
								<option>Bogota</option>
								<option>Medellin<option>
								<option>Cali<option>
								<option>Barranquilla<option>
								<option>Cartagena<option>
								<option>Cucuta<option>
								<option>Bucaramanga<option>
								<option>Ibague<option>
								<option>Soledad<option>
								<option>Pereira<option>
								<option>Santa Marta<option>
								<option>Pasto<option>
								<option>Villavicencio<option>
								<option>Manizales<option>
								<option>Monteria<option>
								<option>Bello<option>
								<option>Valledupar<option>
								<option>Buenaventura<option>
								<option>Neiva<option>
								<option>Risaralda<option>
																</select><br><br>
								<BR><font style="color: red" ><strong>Solicitar Plazo de Pago?</font><BR></strong>
								<select>								
								<option>SI</option>
								<option>NO</option>
								</SELECT>
								<BR>	<BR>
								<font style="color: red" ><strong>DIRECCION</font><BR></strong>				 
								<input type="TEXT" name="TXTdirecc" id="TXTdirecc" size="30"   >
								<BR>
								<font style="color: red" ><strong>Fecha</font><BR></strong>
								 <input type="text"  name="TXTFecha" id="TXTFecha" size="30" disabled="disabled" value='<?php echo $fecha1;?>'/><b style="color: red" size=60><BR></b>
								<font style="color: red" ><strong>TELEFONO</font><BR></strong>				 
								<input type="TEXT" name="TXTtel" id="TXTtel" size="30"  onkeyPress='return valideNumero(event)' >
								<BR>					
								<font style="color: red" ><strong>SU PRODUCTO A COMPRAR</font><BR></strong>					 
								<input type="TEXT" name="TXTProduct" id="TXTProduct" size="30" disabled="disabled" value='<? echo $NOMBREbandeja ;?>'>
								<BR>								
								<font style="color: red" ><strong>CANTIDAD A COMPRAR</font><BR></strong>				 
								<input type="TEXT" name="TXTcant" id="TXTcant" size="30" onkeyPress='return valideNumero(event)' onchange ='return PrecioTotal()' >
								<BR>
								<font style="color: red" ><strong>EL PRECIO TOTAL ES</font><BR></strong>				 
								<input type="TEXT" name="TXTprecio" id="TXTprecio" size="30" disabled="disabled" >
								<BR><BR>
									
								
								
								<INPUT TYPE="SUBMIT" NAME="guardarS" id="nuevoUSU" value="CONFIRMAR COMPRA" onmouseover="VALIDARdatos()">
								                     </b>                                          
								<input type="hidden" name="confirmar" value="si"/>
								
								</center>
								
                           <input type="hidden" name="confirmar" value="si"/>
							  </form>	
							
								</div>
							
						</div>
						
					</div>
					
						</div>
					</div>
				</div>
			</section>
	
	
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
<script>
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
			alert("El Correo que Ingreso es  Incorrecto");
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



function VALIDARdatos()
{
DIRECCION= document.getElementById("TXTdirecc").value;
if (DIRECCION=="")
{
alert("ingrese una direccion");
			return (false);			
}
else
{
     telefono= document.getElementById("TXTtel").value;
	 if (telefono=="")
	 {
	 alert("ingrese un telefono");
			return (false);	
	  }
	  else
	  {
	  
	      cantidad= document.getElementById("TXTcant").value;
	 if (cantidad=="")
	 {
	 alert("ingrese una cantidad de productos a comprar");
			return (false);	
	  }
	  
	  
	  
	  }

}

}


function Mayuscula(objeto)
{
    objeto.value=objeto.value.toUpperCase();       /*Convierte a mayuscula*/
}

function PrecioTotal()
{
    cantidad= document.getElementById("TXTcant").value;
    NombreProducto= document.getElementById("TXTProduct").value;	
	
	if  (NombreProducto == "BX30")
        {
		document.getElementById("TXTprecio").value= cantidad * 50 ;	
		
		}
		
		else
		{
		    if (NombreProducto == "BX30SUPERIOR")
			   {
			   document.getElementById("TXTprecio").value= cantidad * 60 ;	
			   
			   }
			   else
			   {
			            if (NombreProducto == "BX30SPC")
			          {
			        document.getElementById("TXTprecio").value= cantidad * 70 ;	
			   
			          }
					  else
					  {
					      if (NombreProducto == "BX30Extra")
			                    {
			                  document.getElementById("TXTprecio").value= cantidad * 80 ;	
			   
			                       }
					  
					  
					  
					  
					  }
			   
			   
			   }
			   
	    } 
}



</script>