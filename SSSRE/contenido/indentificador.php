<?php  

    @$u = $_POST['user'];
    @$u = strtoupper($u);
    @$p = $_POST['password'];

    if (!isset($_SESSION)) { session_start(); }

    include("../contenido/conector.php");

    $consulta="
    select IdPesona as ID,Matricula,Password,Tipo from persona
    WHERE Matricula='".$u."' AND PASSWORD='".$p."'    
    ";  

    $Query1=$conexion->query($consulta) or die ("");

    while ($i = $Query1 -> fetch_assoc()) 
    {
        $idUser=$i['ID'];
        $tipo=$i['Tipo'];
    }


    if (isset($idUser)!=true)   {   
        header ("Location: ../index.php?mensaje=1&#error");
    }
else 
{	
	$query = " 
 SELECT p.N1,p.N2,p.Ap1,p.Ap2,p.Matricula,p.sexo,c.idCarrera FROM 
 persona p
 LEFT OUTER JOIN estudiante e
  ON p.IdPesona = e.IdPesona 
 LEFT OUTER JOIN carrera c 
ON e.idCarrera = c.idCarrera

  WHERE  p.IdPesona =  '".$idUser."'   ";   
	
if ($result = $conexion->query($query)) { 
 
    while ($D = $result->fetch_assoc()) {
	$user = [$D['N1'],$D['N2'],$D['Ap1'],$D['Ap2'],$D['Matricula'],$D['sexo'],$D['idCarrera']];
    } 
	
     //$result->close();  
}

var_dump($user);

    $_SESSION['ID'] = $idUser;
    $_SESSION['Tipo'] = $tipo;
    $_SESSION['u'] = $user;

 
//$conexion->close();
   
    if($tipo==0) { header("Location: ../Admin"); } 
    elseif($tipo==1) { header("Location: ../Alumno"); } 
  
	}
?>