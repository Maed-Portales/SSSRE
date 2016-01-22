 <?php      
			
if(isset($_POST['DatP'])){			
	
$m=ucwords($_POST['matricula']);
$n1=ucwords($_POST['N1']);
$n2=ucwords($_POST['N2']);
$a1=ucwords($_POST['Ap1']);
$a2=ucwords($_POST['Ap2']);
$c=$_POST['Car'];	
$s=$_POST['Sexo'];


				$sqlA = "UPDATE estudiante e JOIN persona p
ON p.IdPesona = e.IdPesona
SET N1='$n1',N2='$n2',Ap1='$a1',Ap2='$a2',sexo='$s',IdCarrera='$c'  
WHERE Matricula='$m'";


				 
  $result = mysqli_query($conexion, $sqlA);
}				 
				 



 //Ingresar 
 
// Actualizar


 ?>