<?php session_start();
$IDENTI = $_POST['TXTidentificacion'];
echo $IDENTI;
$Nidenti= strlen($IDENTI); 


    if ($Nidenti < 10)
     {
       echo '<script> alert("LA IDENTIFICACION NO DEBE SER MENOR A 10 CARACTERES");			
                  	    location.href="../presentacion/datosUsuario.php"
					  </script>';
       }
ELSE
{


$NOMBREcompleto=$_REQUEST["TXTnomBRE"];
$correo=$_REQUEST["TXTcorreo"];
$nomusu=$_SESSION['usuario'];
$claveUSU=$_REQUEST["TXTclaveUSU"];
$IDENTIFI=$_REQUEST["TXTidentificacion"];
$ciudad=$_REQUEST["TXTciudad"];
$telefono=$_REQUEST["TXTtelefono"];
$direcci=$_REQUEST["TXTdireciion"];
$cargo="USUARIO";
$ESTADO="ACTIVO";
$sql="update usuarios set nombre ='".$NOMBREcompleto."',
                        correo ='".$correo."',
                         nomUSU ='".$nomusu."',					    
					    passUSU ='".$claveUSU."',
						identificacion ='".$IDENTIFI."',
						ciudad ='".$ciudad."',
						telefono ='".$telefono."',
						direccion ='".$direcci."',
                        cargoUSU ='".$cargo."',
                         estadoUSU ='".$ESTADO."'						
	where 	 nombre='$NOMBREcompleto'";	

			   	 		 
$res=mysql_query($sql);


echo '<script> alert("sus DATOS DE USUARIO SE ACTUALIZARON EXITOSAMENTE");
					  location.href="../PRESENTACION/indexusuario.php"
					  </script>';
 }
?>