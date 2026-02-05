<?require "../DATOS/coneccion.php"?>
<?PHP

$sql="SELECT * FROM pedido_venta ";
$res=mysql_query($sql);


$filas="";
while ($registro=mysql_fetch_assoc($res))
{
$filas=$filas."<tr>
<td>".$registro["cod_pedido"]."</td>
<td>".$registro["fecha_orden"]."</td>
<td>".$registro["cantidad_productos"]."</td>
<td>".$registro["plazoPago"]."</td>
<td>".$registro["fecha_despacho"]."</td>
<td><a href ='../negocio/VENTAS/editarVENTA.php?IDPEDIDO=".$registro["cod_pedido"]."'><img src ='images/EDITAR.JPG' width='30px'/></a>
<td><a href ='../presentacion/agregarVentaADMIN.php'><img src ='images/add.png' width='30px'/></a>
</td>
</tr>";
}
?>


<br><br><br><br><br><br>
<center>
			<font style="color: black" > SI VE CAMPOS COMO EL <B>PLAZO DE PAGO</B> O LA <B>FECHA DE DESPACHO</B> EN BLANCO USTED DEBERA EDITARLOS Y AGREGAR EL DATO RESPECTIVO </FONT>
					<br><br><br>		
							<TABLE BORDER="5" CELLSPACING="5" >
<tr>
  <th>Codigo Pedido</th>
  <th>Fecha</th>
   <th>Cantidad</th>
    <th>Plazo de Pago</th>
	<th>Fecha Despacho</th>	
	<th>EDITAR </th>	
	<th>AGREGAR </th>

</tr>
	
<?php echo $filas;?>
</table> 
<br><br><br><br><br>
<form  action="indexADMIN.php">
 <input type="submit" value="VOLVER"><br>
		</center>
		</form>