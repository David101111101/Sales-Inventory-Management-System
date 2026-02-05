<?php session_start();
echo $_SESSION['usuario'];
?>




<?php
include("../presentacion/index.php");  
$msgOk="";
$msgErr="";
$clave=$_POST['TXTcontra'];
$usuario=$_POST['TXTusuario'];

    	include '../DATOS/coneccion.php';
		   
$consulta ="SELECT * FROM usuarios WHERE nomUSU='".$usuario."' AND passUSU='".$clave."'";

  $result = mysql_query($consulta, $link)or die(mysql_error());
    $row = mysql_fetch_array($result);	
		  
	   	   if ($row["passUSU"]!=$clave){
		   
                    echo '<script> alert("Usuario o clave incorrectas ");
					  location.href="../presentacion/index.php"
					  </script>';		   
							            }
		            else{
					
					           if ($row["estadoUSU"]!="ACTIVO"){
							   echo '<script> alert("El Usuario se encuentra ELIMINADO (INACTIVO) ");
					  location.href="../presentacion/index.php"
					  </script>';
							   
							   }
							   
							   ELSE
							   {
					
					if ($row["cargoUSU"]=="ADMINISTRADOR")
					{
                              
					
			            echo '<script> alert("bienvenido!");
					     location.href="../presentacion/indexADMIN.php"
					      </script>';
					                                         
					  }
					  ELSE {
					  
				        
						
						echo '<script> alert("bienvenido");
					  location.href="../presentacion/indexUSUARIO.php"
					  </script>';
						
						}
						}
	
		 }
?>