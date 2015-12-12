<?php  
	function generador($longitud,$letras_min,$letras_may,$numeros,$simbolos)
	{ 
		$variacteres  = $letras_min?'abdefghijklmnopqrstuvwxyz':''; 
		$variacteres .= $letras_may?'ABDCEFGHIJKLMNOPQRSTUVWXYZ':'';
		$variacteres .= $numeros?'0123456789':'';    
		$variacteres .= $simbolos?'!#$%&/()?¡¿':'';
		
		$i=0;
		$clv='';

		while($i<$longitud)
		{
			$numrad = rand(0,strlen($variacteres)-1);
			$clv .= substr($variacteres,$numrad,1);
			$i++;
		}
		return $clv;
	}
	



    include("../contenido/conector.php");


/*


SELECT matricula, COUNT(*) FROM alumnos
SELECT matricula FROM alumnos ; 
    
 INSERT INTO login ('idLogin','usuario','password','tipo')
	VALUES
	('', 
	'matricula', 
	'password', 
	'1'
*/

$query_ext_matricula = "SELECT matricula FROM alumnos";
$run_matricula = $conexion ->query($query_ext_matricula); 
                     
$campo2=0;
$errores=0;
 while(@$row = $run_matricula ->fetch_assoc()) { 

    $matricula =  $row["matricula"]; 
    $Sdcl = generador(6,0,1,1,0);

    /* 
 
 $incertar_E = "INSERT INTO login values (' ";

     
$DATOS[1]='';
$DATOS[2]=$matricula;
$DATOS[3]=$Sdcl;
$DATOS[4]='1';   
    

     
 foreach ($DATOS as $campo2 => $valor2)
  {

    $valor2 =="1" ?
    $incertar_E .= $valor2."'); " : $incertar_E .= $valor2."','";
 } */
    $incertar_E = "INSERT INTO login values ( '','$matricula', '$Sdcl','1')";
 
   $result = mysqli_query($conexion, $incertar_E); 
  

 if (!$result){ /*echo "Error al insertar registro ".$campo;*/ $errores+=1;}

     $campo2+=1;
 }

echo "
    <strong>
        <center>
            ARCHIVO IMPORTADO CON EXITO, EN TOTAL". $campo2 ."REGISTROS Y ". $errores ." ERRORES
        </center>
    </strong>"; 
    $conexion->close();
  
?>