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
<td>".$registro["cargoUSU"]."</td>
<td><a href ='../negocio/USUARIOS/editarUSUARIO.php?NOMBRE=".$registro["nombre"]."'><img src ='../PRESENTACION/images/EDITAR.JPG' width='30px'/></a>
<td><a href ='../negocio/USUARIOS/eliminarUSUARIO.php?NOMBRE=".$registro["nombre"]."'><img src ='../PRESENTACION/images/eliminar.png' width='30px'/></a>
</td>
</tr>";
}
?>