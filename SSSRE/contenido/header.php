<header> 
    <?php 
        
        $fichero = "res/HD-TecM.png";
        if (file_exists($fichero)) {
            echo "<img src='res/HD-TecM.png'>";    }  
        else { echo "<img src='../res/HD-TecM.png'>";}
    ?>
</header> 