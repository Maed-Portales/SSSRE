<?php 
session_start();

include ("contenido/head.php");

 


if ($_SESSION['id_usuario'])
{	
	session_destroy();
	echo '<script language = javascript>
	alert("su sesion ha terminado correctamente")
	self.location = "index.php"
	</script>';}
else
{
	echo '<script language = javascript>
	alert("No ha iniciado ninguna sesión...")
	self.location = "index.php"
	</script>';}
?>

