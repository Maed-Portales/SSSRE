<?php
$mensaje=$_GET["mensaje"]; 

header ("Location: ../index.php?mensaje=#".urlencode($mensaje));

?>