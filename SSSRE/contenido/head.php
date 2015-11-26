<?php


$ERROR=error_reporting(E_ALL ^ E_NOTICE); 
date_default_timezone_set('America/Monterrey');
@$año = date("Y"); 
session_start();
 
include("conector.php");    
include "opciones.php";   
include "msj_data.php"; 


        $fichero = "css/estilos.css";
        if (file_exists($fichero)) { $rutas = "
	<link rel='stylesheet' type='text/css' href='css/estilos.css'> 
	<link rel='Shortcut Icon' href='res/favicon.ico' type='image/x-icon' />
        
	<script src='js/jquery-1.2.6.min.js'></script>
    "; }else{
            $rutas = "            	
	<link rel='stylesheet' type='text/css' href='../css/estilos.css'> 
	<link rel='Shortcut Icon' href='../res/favicon.ico' type='image/x-icon' />
        
	<script src='../js/jquery-1.2.6.min.js'></script>
    ";
        }
?>


<!DOCTYPE html><!-- HTML5 -->
<html lang="es-ES" dir="ltr">
<head>
	<title>S.S.R.E | <?php echo @$titulo; ?> </title>
	
	<meta Content-Type:text/html charser="utf-8" />
	<meta name="description" content=" " />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	 
	<?php echo $rutas; ?>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
    <script> $(function() { $( "#tabs" ).tabs(); }); </script>    
    <script>
    if(history.forward(1)){location.replace(history.forward(1))}
    </script>
</head>
    