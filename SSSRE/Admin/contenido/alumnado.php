<?php $lis_alum=[
    "Jesus Maed Portales Rodriguez", 
    "Adilene Rios Fajardo", 
    "Pedro Antonio Cabrera Sotres",
    "Ivan Sair Casto Lopez"]; 
?>


<div class="List_alumnado">

    <form name="bsq_alumno" action="" method="post">

    <label>Periodo Escoloar:</label>
    <select>
        <option /> - 
        <option />Feb-Jul	
        <option />Ago-Ene
    </select>


    <label>Año:</label>
    <select>
        <option /> - <?php for ($año=2008; $año<=2115 ; $año++) { ?>
        <option /> <?php echo $año; } ?>	
    </select>

    <label>Matricula:</label>
     <input type="text" name="matricula" maxlength="9">

     <input type="submit" name="buscar_alumno" value="Buscar">
    </form>

    <hr>

    <div class="contenedor_alumnos">

    <table name="tb_lst_alum" class="lst_alumnos" border="0px"> 
	   <tr>
            <th width="22%">Alumnos</th>
            <th width="3%">Editar</th>
            <th width="3%">Cotactar</th>
            <th width="10%">Actividades Extra Curiculares</th>
            <th width="10%">Curso de Ofimatica</th>
            <th width="10%">Servicio Social</th>
            <th width="10%">Residencias Profesionales</th>
            <th width="10%">Siguiente del egresado</th>
        </tr> 
    <?php foreach ($lis_alum as $key => $value) { ?>
        <tr>

            <td class="txt_noms"> 
                 <?php echo( $value); ?>
            </td>
            <td> 
                <button id="edit" name="edit" title="Editar datos del alumno"t>
                    <!--img src="../res/log.png"-->
                    <spam class="icon-edit"></spam>
                </button> 
            </td>
            <td> 
                <button class="reacom" id="edit" name="contac" title="Contactar"> 
                   <!-- <img src="../res/email.png" -->
                   <spam class="icon-mail-alt"></spam>
                </button>
            </td>
            <td> 
                <button class="reacom" id="edit" name="ver" title="Ver documento"> 
                    <!-- img src="../res/version.png" -->
                   <spam class="icon-eye-3"></spam>
                 </button>
                <button class="reacom" id="edit" name="dd" title="Descargar documentos">
                    <!-- img src="../res/down5.ico" -->
                   <spam class="icon-download"></spam>
                </button>
            </td>
            <td> 
                <button class="reacom" id="edit" name="ver" title="Ver documento"> 
                    <!-- img src="../res/version.png" -->
                   <spam class="icon-eye-3"></spam>
                 </button>
                <button class="reacom" id="edit" name="dd" title="Descargar documentos">
                    <!-- img src="../res/down5.ico" -->
                   <spam class="icon-download"></spam>
                </button>
            </td>
            <td> 
                <button class="reacom" id="edit" name="ver" title="Ver documento"> 
                    <!-- img src="../res/version.png" -->
                   <spam class="icon-eye-3"></spam>
                 </button>
                <button class="reacom" id="edit" name="dd" title="Descargar documentos">
                    <!-- img src="../res/down5.ico" -->
                   <spam class="icon-download"></spam>
                </button>
            </td>
            <td> 
                <button class="reacom" id="edit" name="ver" title="Ver documento"> 
                    <!-- img src="../res/version.png" -->
                   <spam class="icon-eye-3"></spam>
                 </button>
                <button class="reacom" id="edit" name="dd" title="Descargar documentos">
                    <!-- img src="../res/down5.ico" -->
                   <spam class="icon-download"></spam>
                </button>
            </td>
            <td> 
                <button class="reacom" id="edit" name="ver" title="Ver documento"> 
                    <!-- img src="../res/version.png" -->
                   <spam class="icon-eye-3"></spam>
                 </button>
                <button class="reacom" id="edit" name="dd" title="Descargar documentos">
                    <!-- img src="../res/down5.ico" -->
                   <spam class="icon-download"></spam>
                </button>
            </td>
        </tr><?php } ?>
    </table>
	</div> 
</div> 