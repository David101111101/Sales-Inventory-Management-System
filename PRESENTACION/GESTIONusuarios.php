<?require "../DATOS/coneccion.php"?>
<?PHP

$sql="SELECT * FROM usuarios ";
$res=mysql_query($sql);
$msgOk="datos guardados";

$filas="";
while ($registro=mysql_fetch_assoc($res))
{
$filas=$filas."<tr>
<td>".$registro["nombre"]."</td>
<td>".$registro["correo"]."</td>
<td>".$registro["nomUSU"]."</td>
<td>".$registro["passUSU"]."</td>
<td>".$registro["identificacion"]."</td>
<td>".$registro["ciudad"]."</td>
<td>".$registro["telefono"]."</td>
<td>".$registro["direccion"]."</td>
<td>".$registro["cargoUSU"]."</td>
<td>".$registro["estadoUSU"]."</td>
<td><a href ='../negocio/USUARIOS/editarUSUARIO.php?NOMBRE=".$registro["nombre"]."'><img src ='images/EDITAR.JPG' width='30px'/></a>
<td><a href ='../negocio/USUARIOS/eliminarUSUARIO.php?NOMBRE1=".$registro["nomUSU"]."'><img src ='images/eliminar.png' width='30px'/></a>
<td><a href ='nuevoUSUadmin.php?NOMBRE1=".$registro["nombre"]."'><img src ='images/add.png' width='30px'/></a>
</td>
</tr>";
}
?>


<br><br><br><br><br><br>
<center>
			
							
							<TABLE BORDER="5" CELLSPACING="5" >
<tr>
  <th>NOMBRE</th>
  <th>CORREO</th>
   <th>USUARIO</th>
    <th>CLAVE</th>
	<th>Identificacion</th>
	<th>CIUDAD </th>	
<th>TELEFONO </th>
<th>DIRECCION </th>
<th>CARGO</th>
<th>ESTADO</th>
	<th>EDITAR </th>
	<th>ELIMINAR </th>
	<th>AGREGAR </th>
	
	

</tr>
	
<?php echo $filas;?>
</table> 
<br><br><br><br><br>
<form  action="indexADMIN.php">
 <input type="submit" value="VOLVER"><br>
		</center>
		</form>



