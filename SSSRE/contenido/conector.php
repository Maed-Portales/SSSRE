<?php
function conectarse() 
{ 
	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$db = "db_sssre";
	
	$conectar=new mysqli($servidor,$usuario,$password,$db) or die("No se pudo conectar a la DB De MySql");
	return $conectar;
}	
	$conexion = conectarse();
?> 