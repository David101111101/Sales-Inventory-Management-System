<?
 include "../../DATOS/coneccion.php"; 
 $fecha1 = date("d/m/Y");
 $cod_Pedido  ="null";
					$fecha=$fecha1;
					$cantidad=$_POST['TXTcant'];
					$PlazoPago = $_POST['PLAZOpago'];
					$FechaDespacho="despacho";
					$nombreCompleto= $_POST['nombre'];
					
					
				$sql="insert into pedido_venta values('$cod_Pedido','$fecha','$cantidad','$PlazoPago','$FechaDespacho','$nombreCompleto')";					
echo $sql;
mysql_query($sql);

 echo '<script> alert("SU PEDIDO DE VENTA SE GENERO CON EXITO");			
                  	    location.href="../../presentacion/indexadmin.php"
					  </script>';
?>