<?
$recipiente = "david.st_rock@hotmail.com";
$msg = "El Sr: $Nombre, envia el formulario con los siguientes datos:\n\n\n\n
Nombre: $Nombre
Email:  $emailUs
Telefono:  $asunto
Mensaje:
$mensaje\n\n";
$nombre = $_POST['nombre'];
$emailUs = $_POST['email'];
$asunto = $_POST['asunto'];
$msg = $_POST['mensaje'];
     if ($nombre == "" or $emailUs == "" or $asunto == ""   or $mensaje == "")
     	 {
            echo "<h3>debe llenar los campos</h3>";			 
         }
     else 
         {
		  
     $mensaje.= "NOMBRE:   ".$nombre. "\n";
    $mensaje.= "EMAIL:    ".$emailUs."\n";
    $mensaje.= "FECHA:    ".date("d/m/Y")."\n";
    $mensaje.= "HORA:     ".date("h:i:s a")."\n";
    $mensaje.= "---------------------------------- \n\n";
    $mensaje.= $mensaje."\n\n";
    $mensaje.= "---------------------------------- \n";             
		mail("$recipiente", "$asunto", "$msg", "FROM: $email");		
		 echo "Su mensaje fue enviado......";			 
}




?>		