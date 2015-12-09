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
	$Sdcl = generador(6,0,1,1,0);
?>