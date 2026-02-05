<?









?>
<html lang="en">
<head>
<title>REGISTRESE</title>
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
							
								<h2 class="p0">ingrese sus datos</h2><br><br>
								<form name="nuevoUSU" method="post"  action="../NEGOCIO/nuevoUSU.php" >								
								
								<font style="color: red" ><strong>su nombre completo::</font><BR></strong>
								<td><input type="text"   name="TXTnomUsuario" id="TXTnomUsuario" size="30" onkeyPress='return valideLetra(event)'/> <br><br>
								<font style="color: red" ><strong>su correo:</font><BR></strong>
								<td><input type="text" name="TXTcorreo"  id="TXTcorreo" onchange='return valideEmail12(this)' autocomplete="off"><br><br>
								<font style="color: red" ><strong>confirme su  correo:</font><BR></strong>
								<td><input type="text" name="TXTcorreo1" id="TXTcorreo1" ></td><br><br>	<td>									                                                        
								<font style="color: red" ><strong>elija una CLAVE:</font><BR></strong>
								<td><input type="PASSWORD" name="TXTcontra" id="TXTcontra" onmouseover="validarEmail()" autocomplete="off"></td><br><br>
								<td>
								<font style="color: red" ><strong>repita su CLAVE</font><BR></strong>
								
								<input type="PASSWORD" name="TXTcontra1" id="TXTcontra1"></td><br><br>
								
								<font style="color: red" ><strong>IDENTIFICACION:</font><BR></strong>
								<td><input type="TEXT" name="TXTdocument" id="TXTdocument" onmouseover="validarPaSS()" onkeyPress='return valideNumero(event)'></td>
								<td>
								<br><font style="color: red" ><strong>CIUDAD</font><BR></strong>				 
								<select name="ciudad" id="ciudad">
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
																
								<font style="color: red" ><strong>TELEFONO</font><BR></strong>				 
								<input type="TEXT" name="TXTtel" id="TXTtel" size="30"  onkeyPress='return valideNumero(event)' >
								<BR>	
								
								
								<font style="color: red" ><strong>DIRECCION</font><BR></strong>				 
								<input type="TEXT" name="TXTdirecc" id="TXTdirecc" size="30"   >
								<BR>
							
								<INPUT TYPE="SUBMIT" NAME="guardar" id="nuevoUSU" value="REGISTRARSE"  onmouseover="validarCAMPOS()" >
								<PRE>
							<b style="color: green" size=70>
													 <?php echo $msgOk;?></b>	
								</PRE> 
								     <input type="hidden" name="confirmar" value="si"/>
								 
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
			<center>
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
				</center>
				<div class="row-bot">
					<b style="color:blue "><h3><?php echo $si ?></h3></b>
				</div>
			</footer>
		</div>
	</div>
</body>
</html>

<script>
function validarEmail () 
{
correo1= document.getElementById("TXTcorreo").value;
correo2= document.getElementById("TXTcorreo1").value;
if  (correo1==correo2) 
      {}
else
{
alert("LOS CORREOS NO COINCIDEN")
	 return false;
}
}


function validarPaSS () 
{
contra1= document.getElementById("TXTcontra").value;
contra2= document.getElementById("TXTcontra1").value;
if  (contra1==contra2) 
      {}
else
{
alert("LAS CONTRASEÑAS NO COINCIDEN")
	 return false;
}
}


function validarCAMPOS () 
{


nomUSUARIO= document.getElementById("TXTnomUsuario").value;



if (nomUSUARIO=="") 
      {
       alert("INGRESE UN NOMBRE");
	   
	  return false;
	  
	  }
	  
	  
correo= document.getElementById("TXTcorreo").value;

if  (correo=="") 
      { 
	  alert("INGRESE UN CORREO");
	 return false;
	 }
	 
contra= document.getElementById("TXTcontra").value;

if (contra=="") 
      {
       alert("INGRESE UNA CLAVE");
	  return false;
	  }
	  
identificacion=document.getElementById("TXTdocument").value; 

if (isNaN(identificacion))
{
alert("La Identificacion debe ser solo Numeros");
return false;
}
else
{
        if (identificacion=="") 
      {
       alert("INGRESE UNA IDENTIFICACION");
	  return false;
	  } 
}
CIUDAD=document.getElementById("ciudad").value; 
if (CIUDAD=="") 
      {
       alert("INGRESE UNA ciudad");
	  return false;
	  } 
telefono=document.getElementById("TXTtel").value; 
if (telefono=="") 
      {
       alert("INGRESE UN TELEFONO");
	  return false;
	  } 
	  
direcc=document.getElementById("TXTdirecc").value; 
if (direcc=="") 
      {
       alert("INGRESE UNA DIRECCION");
	  return false;
	  } 	  



}

function valideEmail12(objeto)
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