 <?php  include ("../contenido/head.php");  

 
 if($ERROR)
 { echo "<!DOCTYPE html>
<html lang='es-MX'>
<head> 
<title>Acceso Usuarios</title> 
	<meta Content-Type:'text/html' charser='utf-8' />
	<meta name='description' content='' />
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
	
   <link rel='stylesheet' type='text/css' href='CSS/ESTILOS.css'>
   <link rel='Shortcut Icon' href='res/favicon.ico' type='image/x-icon'/>
</head>
<body>
</body>
</html>
"; }
 

$u = $_POST['user'];
$u = strtoupper($u);
$p = $_POST['password'];

  

//Inicio de variables de sesión
if (!isset($_SESSION)) { session_start(); }

$consulta="SELECT*FROM usuario WHERE usuario='".$u."' AND PASSWORD='".$p."'";  

$Query1=$conexion->query($consulta) or die ("");

 

while ($i = $Query1 -> fetch_assoc()) 
{
   $idUser=$i['id_usuario'];
   $tipo=$i['tipo'];
}

	if (!$idUser || isset($Query1)==null) 
	{
        $mensaje='error';
     
        header ("Location: index.php?mensaje=".urlencode($mensaje));
	}
	else 
	{       
        $_SESSION['id_usuario'] = $idUser;
        $_SESSION['tipo'] = $tipo;


        if($tipo==0) { header("Location: ../Admin"); } 
        elseif($tipo==1) { header("Location: ../Alumno"); }
        else{ header("Location: index.php");  }
    }

?>