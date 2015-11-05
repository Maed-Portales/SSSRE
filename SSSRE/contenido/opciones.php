<?php
if (isset($_GET["opcion"] )) 
    @$archivo = $_GET["opcion"]; 
    switch (@$archivo)
    {
        default:
            @$titulo = "HOME";
            @$contenido = "contenido/login.html";
        break;
	}
?>