<?php 
session_start();
echo "
<!DOCTYPE html>
<html lang='es'>
<head> 
<title>Acceso Usuarios</title> 
	<meta Content-Type:'text/html' charser='utf-8' />
	<meta name='description' content='' />
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
	
   <link rel='stylesheet' type='text/css' href='CSS/ESTILOS.css'>
   <link rel='Shortcut Icon' href='RCS/favicon.ico' type='image/x-icon'/>
</head>
<body>
</body>
</html>
";


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

