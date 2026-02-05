<html> 
<head> 
   <title>CONECCION</title> 
</head> 
<body>

<?php 
 
   $link = mysql_connect("localhost","root","12345") 
   or die (mysql_error());
   if (!mysql_select_db("test",$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 

?>


</body> 
</html>