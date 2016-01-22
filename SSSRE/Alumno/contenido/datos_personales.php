<?php
include("ing_dat_alum.php");

?>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Datos Generales</a></li>
    <li><a href="#tabs-2">Vivienda</a></li>  
    <li><a href="#tabs-3">Contactar</a></li>  
    <li><a href="#tabs-4">Seguridad</a></li>  
  </ul>
    
    <div id="tabs-1">
        <fieldset>
            <legend>Datos del Alumno</legend>
                <form name="dts_pers" action="" method="post"> 
                    <div class="datos_form_pers">
                        <label> Matricula: </label>
                        <input type="text" name="matricula" value="<?php echo $_SESSION['u'][4]; ?>"   readonly="readonly" title="La matricula no se puede modificar" >
                    </div>
                    <div class="datos_form_pers">
                        <label for='N1'>Primer nombre (<span class="required">*</span>): </label>
                        <input type="text" name='N1' value="<?php echo $_SESSION['u'][0]; ?>" pattern="[a-z]*[A-Z]*" title='Favor de solo ingresar de [a-z] en mayúsculas y minúsculas.'/>
                    </div>
                    <div class="datos_form_pers">
                        <label for='N2'>Segundo Nombre (<span class="required">*</span>): </label>
                        <input type="text" name='N2' value="<?php echo $_SESSION['u'][1]; ?>" />
                    </div>
                    <div class="datos_form_pers">
                        <label for='Ap1'> Apellido paterno (<span class="required">*</span>): </label>
                        <input type="text" name='Ap1' value="<?php echo $_SESSION['u'][2]; ?>"   >
                    </div> 
                    <div class="datos_form_pers">
                        <label for='Ap2'> Apellido materno (<span class="required">*</span>): </label>
                        <input type="text" name='Ap2' value="<?php echo $_SESSION['u'][3]; ?>"   >
                    </div> 
                    <div class="datos_form_pers">
                        <label> Sexo (<span class="required">*</span>): </label>                       
                            <select name='Sexo'>
                                <option value="">-</option><?php
								foreach($genero_sexual as $i =>$d){	echo "
								 <option value='".$d."'"; if($d==$_SESSION['u'][5]) { echo ' selected '; }echo "> $d"; } 
								?> 
                        </select>
                    </div>
                    <div class="datos_form_pers">
                        <label> Carrera (<span class="required">*</span>): </label>
                          
						  <select name='Car'>
                             <option value="">-</option>
							 <?php  
							 $Q_C =" SELECT idCarrera,AcronimoC,NomCarrera FROM carrera"; 
							 $r_C = $conexion->query($Q_C);
							 while ($row = $r_C -> fetch_assoc()) { 
							 @$c1 =  $row['idCarrera'];  
							 @$c2 = utf8_encode( $row['AcronimoC']); echo "
							<option value='".$c1."'"; if($c1 == $carrera ) { echo ' selected '; }echo "> $c2";  }
							 ?>
                           </select> 
                        
                    </div>
                    <div class="datos_form_pers">
                        <label> Semestre (<span class="required">*</span>): </label>
                        <input type="text">
                    </div>
                    <div class="datos_form_pers"> 
                        <input type="submit" name="DatP" value="Ingresar Datos" />
                    </div>
                </form>
        </fieldset> 
    </div>
  
  
  
  <div id="tabs-2">
    <fieldset>
        <legend>Vivienda</legend>
            <form name="dts_pers" action="" method="post"> 
               
               <input type="hidden" name="otrosD" value="id_usurio" /> 
               
                <div class="datos_form_pers">
                    <label> Domicilio: </label>
                    <input type="text">
                </div>

                <div class="datos_form_pers">
                    <label>Número Int: </label>
                    <input type="text">
                </div>
                
                <div class="datos_form_pers">
                    <label>Núero Ext: </label> 
                    <input type="text">
                </div>

                <div class="datos_form_pers">
                    <label>Colonia o Sector: </label>
                    <input type="text">
                </div> 

                <div class="datos_form_pers">
                    <label>Código Postal: </label>
                    <input type="text">
                </div>

                <div class="datos_form_pers">
                    <label>País: </label>
                    <input type="text">
                </div>

                <div class="datos_form_pers">
                    <label>Estado: </label>
                    <input type="text">
                </div>

                <div class="datos_form_pers">
                    <label>Municipio: </label>
                    <input type="text">
                </div>

                <div class="datos_form_pers"> 
                    <input type="submit" name="otrosD" value="Enviar Datos" />
                </div>
            </form>
    </fieldset> 
  </div>
  
  
  
  <div id="tabs-3">
    <fieldset>
        <legend>Contactar</legend>
            <form name="dts_pers" action="" method="post"> 
               
               <input type="hidden" name="otrosD" value="id_usurio" /> 
               
                

                <div class="datos_form_pers">
                    <label>Correo: </label>
                    <input type="text">
                </div>


                <div class="datos_form_pers">
                    <label>Telefono: </label>
                    <input type="text">
                </div>
                   
                   <div class="datos_form_pers">
                    <label>Célular 1: </label>
                    <input type="text">
                </div>
                   
                   <div class="datos_form_pers">
                    <label>Célular 2: </label>
                    <input type="text">
                </div>

                <div class="datos_form_pers">
                    <label>Facebook: </label>
                    <input type="text">
                </div>

                <div class="datos_form_pers">
                    <label>Twitter: </label>
                    <input type="text">
                </div> 

                <div class="datos_form_pers">
                    <label>Google+: </label>
                    <input type="text">
                </div> 

                <div class="datos_form_pers"> 
                    <input type="submit" name="otrosD" value="Enviar Datos" />
                </div>
            </form>
    </fieldset> 
  </div>
  
  
  
  <div id="tabs-4">
    <fieldset>
        <legend>Seguridad</legend>
            <form name="dts_pers" action="" method="post"> 
               
               <input type="hidden" name="otrosD" value="id_usurio" />  

                <div class="datos_form_pers">
                    <label>Nuevo Password: </label>
                    <input type="text">
                </div> 
                
            

                <div class="datos_form_pers"> 
                    <input type="submit" name="otrosD" value="Enviar Datos" />
                </div>
            </form>
    </fieldset> 
  </div>
  
  
  
  
  
  
  
  
  
</div>
    
     