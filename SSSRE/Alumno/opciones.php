<?php
if (isset($_GET["opcion"] )) 

 @$archivo = $_GET["opcion"]; 
switch (@$archivo) {

    case '6':
		@$titulo = "Datos Personales";
        @$contenido = "contenido/datos_personales.php";
		break; 

	default:
		@$titulo = "Alumno";
        @$contenido = "contenido/categorias.php";
		break;

	} 

 ?>