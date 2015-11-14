<?php include ('contenido/head.php'); ?>
<body><?php echo $msjs_data; ?>
    <div class='conteniner'>
        <?php  include ('contenido/header.php'); ?>
            <aside id='Caja_Contenido_cen'>
                <?php
                include(@$contenido); ?> 
            </aside> <!-- FIN contenido_tematico   -->
        <?php include('contenido/footer.html') ?>
    </div> <!-- Fin de conteniner --> 
    </body> 
</html>

 