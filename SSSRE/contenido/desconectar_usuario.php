<?php 

session_start();

include ("contenido/head.php");

if ($_SESSION['id_usuario'])
{	
    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        
        $params = session_get_cookie_params();

        setcookie(session_name(), '', time() - 42000,

                  $params["path"], $params["domain"],
    
                  $params["secure"], $params["httponly"]
                 );
    }
 
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

