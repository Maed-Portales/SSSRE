<?php
if (isset($_GET["opcion"] )) 

 @$archivo = $_GET["opcion"]; 
switch (@$archivo) {

	case '1': 
		@$titulo = "Nuevo Consentrado";
		@$contenido = "contenido/cargar_nuevo_consentrado.php";
		break;


	case '2': 
		@$titulo = "Alumnado";
		@$contenido = "contenido/alumnado.php";
		break;


	case '5': 
		@$titulo = "Configuración";
		@$contenido = "contenido/Configuracion.php";
		break;


	default:
		@$titulo = "Alumno";
        @$contenido = "contenido/categorias.php";
		break;

	} 

 ?>