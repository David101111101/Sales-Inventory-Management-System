<?php



?>
<?require "../conexion.php"?>

<?require "menu.php"?>


<?php
$msgOk="";
$msgErr="";
$confirmar=$_REQUEST["confirmar"];
if ($confirmar == "si")
{
$codigo=$_REQUEST["txtcodigo"];
$nombre=$_REQUEST["txtNombre"];
$email=$_REQUEST["txtemail"];
$telefono=$_REQUEST["txtemail"];

$sql="insert into estudiante values (".$codigo.",'".$nombre."','".$email."','".$telefono."')";
mysql_query($sql);
$msgOk="datos guardados";

}
?>
<html> 
<head> 
<A href="../PROFESOR/NUEVOPROFE.php">profesor</a><BR>
<title>ESTUDIANTE</title> 
</head> 
<H2>nuevo</H2>
<body> 
<form method="post" onsubmit="return validar()">
<BR><BR><BR>
<tr>
<CENTER>
<HR>
<th>CODIGO</th>
<td><input type="text" name="txtcodigo"  id="txtcodigo" /></td>
</tr>
<tr>
<BR>
<HR>
<th>NOMBRE</th>
<td><input type="text" name="txtNombre" id="txtNombre" /></td>
</tr>
<BR>
<HR>
<th>EMAIL</th>
<td><input type="text" name="txtemail"  id="txtemail" /></td>
</TR>
<BR>
<HR>
<th>TELEFONO</th>
<td><input type="text" name="txtTelefono" id="txtTelefono"/></td>
</tr>
<HR>
<input type="submit" value="guardar" >
</CENTER>

<input type="hidden" name="confirmar" value="si"/>

</form>
<b style="color: red" size=60>
<?php echo $msgOk;?>
</b>

<script>

function validar () 
{
codigo= document.getElementById("txtcodigo").value; 

if (codigo=="") 
     {
      alert("DEBE INGRESAR UN CODIGO ");
	  return false;
     }
nombre= document.getElementById("txtNombre").value; 

if (nombre=="")
     {
	 alert("INGRESE UN NOMBRE")
	 return false;
	 }
	 
email= document.getElementById("txtemail").value; 

if (email=="")
     {
	 alert("INGRESE UN EMAIL")
	 return false;
	 }
	 
telefono= document.getElementById("txtTelefono").value; 

if (telefono=="")
     {
	 alert("INGRESE UN TELEFONO")
	 return false;
	 }
	 
	 
if (isNaN(codigo))
{
alert("el codigo debe ser solo numeros")
return false;
}

if (isNaN(telefono))
{
alert("el telefono debe ser solo numeros")
return false;

}

}

</script>

</body>
</html>