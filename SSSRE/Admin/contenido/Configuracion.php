<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Datos Generales</a></li>
    <li><a href="#tabs-2">Medios de Contacto</a></li>  
    <li><a href="#tabs-3">Seguridad</a></li>  
  </ul>
    
    <div id="tabs-1">
        <fieldset>
            <legend>Datos del Admin</legend>
                <form name="dts_pers" action="" method="post"> 
                    <input type="hidden" name="otrosD" value="id_usurio" /> 
                    <div class="datos_form_pers">
                        <label for='user'>Num Empleado: </label>
                        <input id="user" type="text"  maxlength='3' name="user" pattern="[0-9]*" autofocus required placeholder="000" title='solo con números del 0 al 9'/>
                    </div>
                    <div class="datos_form_pers">
                        <label>Carrera Profesional: </label>
                        <select name='carrera_profesional' autofocus required  placeholder="000">
                            <option value="-"></option> 
                            <option value="1">Licenciado</option>
                            <option value="2">Ingeniero</option>
                            <option value="3">Maestro en Ciencias</option>
                        </select>
                    </div>    
                    <div class="datos_form_pers">
                        <label for='apellidos'> Apellidos: </label>
                        <input id='apellidos' type="text" name='apellidos' autofocus required title='separe con espacio sus apellidos'>
                    </div> 
                    <div class="datos_form_pers">
                        <label> Nombres: </label>
                        <input type="text" autofocus required >
                    </div>
                    <div class="datos_form_pers">
                        <label> Sexo: </label>
                        <select name='sexo' autofocus required >
                            <option value="-"></option>
                            <option value="">Femenino</option>
                            <option value="">Masculino</option>
                        </select>
                    </div> 
                    <div class="datos_form_pers"> 
                        <input type="submit" name="otrosD" value="Enviar Datos" />
                    </div>
                </form>
        </fieldset> 
    </div>
  
  
  
  <div id="tabs-2">
    <fieldset>
        <legend>Medios de Contacto</legend>
            <form name="dts_pers" action="" method="post"> 
               
               <input type="hidden" name="otrosD" value="id_usurio" /> 
               
                <div class="datos_form_pers">
                    <label> Correo Electronico: </label>
                    <input type="email" name="email" required/>
                </div>
                
                <div class="datos_form_pers">
                    <label>Telefono: </label>
                    <input name='tel' type="text">
                </div>

                <div class="datos_form_pers">
                    <label>Célular: </label>
                    <input name='cel' type="text">
                </div>  
                
                <div class="datos_form_pers">
                    <label>Facebook: </label>
                    <input name='Facebook' type="text">
                </div>

                <div class="datos_form_pers">
                    <label>Twitter: </label>
                    <input name='Twitter' type="text">
                </div>
                
                <div class="datos_form_pers">
                    <label>Google+: </label>
                    <input name='Twitter' type="text">
                </div> 

                <div class="datos_form_pers"> 
                    <input type="submit" name="otrosD" value="Enviar Datos" />
                </div>
            </form>
    </fieldset> 
  </div>
  
  
  <div id="tabs-3">
    <fieldset>
        <legend>Seguridad</legend>
            <form name="dts_pers" action="" method="post"> 
               
               <input type="hidden" name="otrosD" value="id_usurio" /> 

                <div class="datos_form_pers">
                    <label for='pass'>Nuevo Password: </label>
                    <input id="pass" type="password"  maxlength='6'name="password" required placeholder="&bull;&bull;&bull;&bull;&bull;&bull;"/></div> 

                <div class="datos_form_pers"> 
                    <input type="submit" name="otrosD" value="Enviar Datos" />
                </div>


        </form>
    </fieldset> 
  </div>
  
</div>
    
     
