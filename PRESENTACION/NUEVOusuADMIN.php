<?PHP
$msgOk="";
$msgOk123="";
$msgErr="";
$confirm=$_REQUEST["confirmar"];
if ($confirm == 'si')
 {
 include "../DATOS/coneccion.php"; 
 $NOMBRE =$_REQUEST["TXTnomBRE"];
  
           if ($NOMBRE == "" )
            {
		
            $msgErr1="debe ingresar su <u>NOMBRE</u> ";
            }
             else
           {
        $sql =  mysql_query("select nombre FROM usuarios Where nombre='$NOMBRE'");
             if(mysql_num_rows($sql)>=1) 
                   {

   $msgOK="El Nombre Con El Cual Se Quiere Registrar ya Existe  Porfavor Ingrese Otro";
					  
                 }
                    else
                    {
                     
					 
					
 
 
 
   
        
	
				 }
				 }
				 }
				 
 
?>
<html lang="en">
<head>
<title>AGREGAR USUARIO</title>
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
								<h2 >ingrese los datos del nuevo usuario</h2><br><br>
								
								<form  method="post" name="nuevoUSU" ACTION="../NEGOCIO/NUEVOusuADMIN.PHP">	
								
								
								<font style="color: red" ><strong>nombre completo:</font><BR></strong>
								 <input type="text"  name="TXTnomBRE" id="TXTnomBRE" size="30" onkeyPress='return valideLetra(event)'/><b style="color: red" size=60><?php echo $msgErr1;?><BR></b>
								<font style="color: red" ><strong>su correo:</font><BR></strong>
								<input type="text" name="TXTcorreo"  id="TXTcorreo" size="30" onchange='return valideEmail(this)'><b style="color: red" size=60><?php echo $msgErr2;?></b>
								<BR>
								<font style="color: red" ><strong>Nombre de Usuario:</font><BR></strong>
								<input type="text" name="TXTnomUSU" id="TXTnomUSU" size="30" ><b style="color: red" size=60><?php echo $msgErr3;?></b>
								<BR></b>
								<font style="color: red" ><strong>CLAVE:</font><BR></strong>
								<input type="PASSWORD" name="TXTcontra" id="TXTcontra" size="30" ><b style="color: red" size=60><?php echo $msgErr4;?></b>
								<BR>
								<font style="color: red" ><strong>IDENTIFICACION:</font><BR></strong>
								<input type="text" name="TXTidentificacion" id="TXTidentificacion" size="30" onkeyPress='return valideNumero(event)'><b style="color: red" size=60><?php echo $msgErr5;?></b>
									<BR>	
									<br><font style="color: red" ><strong>CIUDAD</font><BR></strong>				 
								<select NAME="CIUDAD">
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
																</select><br>
									<font style="color: red" ><strong>TELEFONO:</font><BR></strong>
								<input type="text" name="TXTTELEFONO" id="TXTTELEFONO" size="30" onkeyPress='return valideNumero(event)'>
									<BR>	
                               <font style="color: red" ><strong>DIRECCION:</font><BR></strong>
								<input type="text" name="TXTDIRECCION" id="TXTDIRECCION" size="30" ><b style="color: red" size=60>
									<BR>										
								<font style="color: red" ><strong>CARGO		</font><BR></strong>					 
								<input type="TEXT" name="TXTCARGO" id="TXTCARGO" size="30" onmouseover="valideidenti()" onkeypress="Mayuscula(this)" onchange='return valideLetra(event)'>
								<BR>
								<font style="color: red" ><strong>ESTADO		</font><BR></strong>				 
								<input type="TEXT" name="TXTESTADO" id="TXTESTADO" size="30" onchange="VALcargo()" onkeypress="Mayuscula(this)">
								<BR><BR>
								
								
								<INPUT TYPE="SUBMIT" NAME="guardar" id="nuevoUSU" value="GUARDAR"  ONCLICK="VALestado()">
								                   <b style="color: red" size=60><?php echo $msgOK;?>       </b>                                          
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

function valideidenti()
{
identificacion=document.getElementById("TXTidentificacion").value; 

if (isNaN(identificacion))
{
alert("La Identificacion debe ser solo Numeros");
return false;
}
}


function VALcargo()
{
cargo=document.getElementById("TXTCARGO").value; 

if (cargo!="ADMINISTRADOR" && cargo!="USUARIO") 

{
alert("EL CARGO ES INVALIDO INGRESE OTRO");
return false;

}


}

function VALestado()
{
ESTADO1=document.getElementById("TXTESTADO").value; 

if (ESTADO1!="ACTIVO" && ESTADO1!="INACTIVO") 

{
alert("EL ESTADO DEBE SER ||ACTIVO|| O ||INACTIVO||");

}
}


function Mayuscula(objeto){
    objeto.value=objeto.value.toUpperCase();       /*Convierte a mayuscula*/
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