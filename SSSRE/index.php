<?php  include ('contenido/head.php');


                $mensaje='';
                $mensaje=$_GET['mensaje']; 
        
                if(isset($mensaje)) {  
                $msj_er1 = "
                <div  id='error' class='modalmask'>    
                   <div class='modalbox rotate'>
                        <a href='../SSSRE/' title='Close' class='close'>x</a> 
                        <div class='txt'>Usuario o Password incorrectos,<br>Por favor verifique su informacion...</div>
                    </div>   
                </div>
                ";
                }

?>
<body><?php echo $msj_er1; ?>
    <div class='conteniner'>
        <?php  include ('contenido/header.php'); ?>
            <aside id='Caja_Contenido_cen'>
                <?php
                include(@$contenido); ?> 
            </aside> <!-- FIN contenido_tematico   -->
        <?php include('contenido/footer.html') ?>
    </div> <!-- Fin de conteniner --> 



 