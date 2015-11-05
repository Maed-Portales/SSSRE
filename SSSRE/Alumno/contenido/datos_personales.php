<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Datos Personales</a></li>
    <li><a href="#tabs-2">Otros Datos</a></li>  
  </ul>
    
    <div id="tabs-1">
        <fieldset>
            <legend>Datos del Alumno</legend>
                <form name="dts_pers" action="" method="post"> 
                    <div class="datos_form_pers">
                        <label> Matricula: </label>
                        <input type="text">
                    </div>
                    <div class="datos_form_pers">
                        <label> Nombres: </label>
                        <input type="text">
                    </div>
                    <div class="datos_form_pers">
                        <label> Apellidos: </label>
                        <input type="text">
                    </div> 
                    <div class="datos_form_pers">
                        <label> Sexo: </label>
                        <select>
                            <option value="">-</option>
                            <option value="">Femenino</option>
                            <option value="">Masculino</option>
                        </select>
                    </div>
                    <div class="datos_form_pers">
                        <label> Carrera: </label>
                        <input type="text">
                    </div>
                    <div class="datos_form_pers">
                        <label> Semestre: </label>
                        <input type="text">
                    </div>
                    <div class="datos_form_pers"> 
                        <input type="submit" name="otrosD" value="Enviar Datos" />
                    </div>
                </form>
        </fieldset> 
    </div>
  
  
  
  <div id="tabs-2">
    <fieldset>
        <legend>Vivienda | Contactar | Redes Sociales</legend>
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
                    <label>Telefono: </label>
                    <input type="text">
                </div>

                <div class="datos_form_pers">
                    <label>Célular: </label>
                    <input type="text">
                </div>

                <div class="datos_form_pers">
                    <label>Correo: </label>
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
                    <input type="submit" name="otrosD" value="Enviar Datos" />
                </div>
            </form>
    </fieldset> 
  </div>
  
</div>
    
     