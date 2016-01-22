<?php

$mensaje=$_GET['mensaje'];

    switch ($mensaje)
    {
     	case '1': 
		 $msjs_data = "
                <div id='error' class='modalmask'>    
                    <div class='modalbox rotate'>
                        <a href='../../' title='Close' class='close'>x</a> 
                        <div class='txt'> </div><span class='flecha'></span> 
                    </div>   
                </div>
                ";
		break;
     	case '2': 
                $msjs_data = "
                <meta http-equiv='Refresh' content='5;url=../../index.php'>

                <div id='msj1' class='modalmask'>    
                    <div class='modalbox rotate msj'> 
                        <div class='txt1'> </div> <span class='flecha'></span> 
                    </div>    
                </div>
                ";
		break;
            
        default: 
             $msjs_data = "";
        break;
	}
?>