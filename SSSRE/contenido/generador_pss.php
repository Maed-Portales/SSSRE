<?php  
	function generador($longitud,$letras_min,$letras_may,$numeros,$simbolos)
	{ 
		$cadena_clv  = $letras_min?'abdefghijklmnopqrstuvwxyz':''; 
		$cadena_clv .= $letras_may?'ABDCEFGHIJKLMNOPQRSTUVWXYZ':'';
		$cadena_clv .= $numeros?'0123456789':'';    
		$cadena_clv .= $simbolos?'!#$%&/()?¡¿':'';
		
		$i=0;
		$clv='';

		while($i<$longitud)
		{
			$numrad = rand(0,strlen($cadena_clv)-1);
			$clv .= substr($cadena_clv,$numrad,1);
			$i++;
		}
		return $clv;
	}
	

include("../contenido/conector.php");

$query_ext_matricula = "SELECT * FROM alumnos";
$run_matricula=$conexion ->query($query_ext_matricula); 


$query_ext_Id_Estudiante = "SELECT IdEstudiante FROM login";
$run_Id_Estudiante=$conexion->query($query_ext_Id_Estudiante); 

while($row = $run_Id_Estudiante ->fetch_assoc()) { 

    $IdEstudiante=$row["IdEstudiante"]; 
}
$count=0;
$errores=0;

while($row = $run_matricula ->fetch_assoc()) { 

    $IdEst =  $row["IdEstudiante"]; 
    $Sdcl = generador(6,1,1,1,0);

    if($IdEst == $IdEstudiante ) {echo "Todos los alumnos ya cuentan con una clave."; }else{
$incertar_E = "INSERT INTO login values ( '$IdEst','0', '$Sdcl','1')";
$result = mysqli_query($conexion, $incertar_E); 
    }

 if (!$result){  $errores+=1;}

     $count+=1;
 }


echo "
    <strong>
        <center>
            ARCHIVO IMPORTADO CON EXITO, EN TOTAL ".$count." REGISTROS Y ". $errores ." ERRORES
        </center>
    </strong>"; 

$conexion->close();
  
?>