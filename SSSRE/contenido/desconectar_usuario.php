<?php 

session_start();

include ("contenido/head.php");

if ($_SESSION['id_usuario'])
{	
        session_destroy();
        header ("Location: ../index.php?mensaje=2&#msj1");       
}
else
{
	echo '<script language = javascript>
	alert("No ha iniciado ninguna sesión...")
	self.location = "index.php"
	</script>';
}

?>

