<?php  

    @$u = $_POST['user'];
    @$u = strtoupper($u);
    @$p = $_POST['password'];

    if (!isset($_SESSION)) { session_start(); }

    include("../contenido/conector.php");

    $consulta="SELECT*FROM login WHERE usuario='".$u."' AND PASSWORD='".$p."'";  

    $Query1=$conexion->query($consulta) or die ("");

    while ($i = $Query1 -> fetch_assoc()) 
    {
        $idUser=$i['idLogin'];
        $tipo=$i['tipo'];
    }

    if (isset($idUser)!=true)   {   
        header ("Location: ../index.php?mensaje=1&#error");
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