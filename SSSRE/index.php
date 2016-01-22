<?php 
session_start();   

 if(isset($_SESSION['Tipo'])){

    if ($_SESSION['Tipo']==0){header ("Location:Admin");} 
	else if ($_SESSION['Tipo']==1){header ("Location:Alumno"); } } 
	include ('contenido/head.php');  
?>
<body><?php echo $msjs_data; ?>
        <?php  include ('contenido/header.php'); ?>
    <div class='conteniner'>
		<div class="txt_hdr">
		Seguimiento de Servicio Social, Residencias y Egresados
		</div>
	<aside id='Caja_Contenido_cen'>
                <?php 
                include(@$contenido); ?> 
            </aside> <!-- FIN contenido_tematico   -->
        <?php include('contenido/footer.html') ?>
    </div> <!-- Fin de conteniner --> 
    </body> 
</html> 