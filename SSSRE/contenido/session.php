<?PHP
session_start(); 

if (!$_SESSION)
{

    echo '<script language = javascript>
    self.location = "../"
    alert("Tiene que iniciar sesión\npara poder acceder a su cuenta…")
    </script>';
}
    else
    {
        $idUser = $_SESSION['ID'];
        $tipo = $_SESSION['Tipo'];
 
		if($_SESSION['u'][0]==""&&$_SESSION['u'][1]==""&&$_SESSION['u'][2]== ""&&$_SESSION['u'][3]=="")
		{
		 $usuario = $_SESSION['u'][4];
		}else{
		
		    $usuario = $_SESSION['u'][2]." ".$_SESSION['u'][3]." ".$_SESSION['u'][0]." ".$_SESSION['u'][1];
		} 
		$carrera ="3";  
		$genero_sexual=['Maculino','Femenino'];
}
?>