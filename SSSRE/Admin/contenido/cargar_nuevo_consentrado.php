<?php

if(isset($_POST["action"]))
{ /*
    $ia=$_POST["cant"];
   $yaar=$_POST['year'];
   $peridod=$_POST['periodo']; */
    
    $archivo = $_FILES['excel']['name'];
    $tipo = $_FILES['excel']['type'];
    $destino = "bak_".$archivo;

        if(copy($_FILES['excel']['tmp_name'],$destino)) 
            {/*echo "<hr> Archivo Cargado Con Éxito <hr>";*/}
                else {/*echo "Error Al Cargar el Archivo";*/}

        if (file_exists ("bak_".$archivo))
        {
                require_once('../contenido/conector.php');
                require_once('../Classes/PHPExcel.php');
                require_once('../Classes/PHPExcel/Reader/Excel2007.php');

                $objReader = new PHPExcel_Reader_Excel2007();
                $objPHPExcel = $objReader->load("bak_".$archivo);
                $objFecha = new PHPExcel_Shared_Date();
                // $objPHPExcel->setActiveSheetIndex(0);
                $highestRow = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

for ($i=2;$i<=$highestRow; $i++)
                    {
//$_DATOS_EXCEL[$i]['year']=$_POST['year'];
//_DATOS_EXCEL[$i]['periodo']=$_POST['periodo'];
$_DATOS_EXCEL[$i]['IdEstudiante']=$objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['Matricula']=$objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['Nombre']=$objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['Carrera']=$objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['Total de Creditos de la Carrera']=$objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['Creditos Acumulados']=$objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue(); 
                    }

                } else { /*echo "Necesitas primero importar el archivo"; */}


    $errores=0;
 
    
    foreach($_DATOS_EXCEL as $campo => $valor)
    { 
        $sql = "INSERT INTO alumnos VALUES ('";
        
            foreach ($valor as $campo2 => $valor2)
            {
                $campo2 == "Creditos Acumulados" ?
				$sql.= $valor2."'); " : $sql.= $valor2."','";
            }

        $result = mysqli_query($conexion, $sql);

        if (!$result){ /*echo "Error al insertar registro ".$campo;*/ $errores+=1;}
    }
echo "
    <strong>
        <center>
            ARCHIVO IMPORTADO CON EXITO, EN TOTAL $campo REGISTROS Y $errores ERRORES
        </center>
    </strong>";
    unlink($destino); 
    $conexion->close();
}
   



?>

<!------------------------------------------------------------------------------------------------------------------>



<fieldset>
		<legend>Subir información de los Alumnos</legend>
<form name="new_consentrado" method="POST" action='' enctype='multipart/form-data'>

<!--
<div class="caj_new_c r1 r2">
<label class="txt_cj" for="per_es">Periodo Escolar:</label>
<select id="per_es" name="periodo">
    <option value="">-</option>
    <option value="Feb-Jul"> Febrero - Julio </option>
    <option value="Ago-Ene"> Agosoto - Enero</option>
    
</select> 
</div>

<div class="caj_new_c r1 r2">
<label class="txt_cj" for="year">Año:</label>
<select id="year" name="year">
    <option value="">-</option>
   <?php /* for($a=2008; $a<=2115; $a++){ */?>
    <option value="<?php /* echo $a; ?>"><?php echo $a; ?></option>
    <?php } */ ?>
</select> 
</div>
-->
<div class="caj_new_c">
<label class="txt_cj" for="arch">Archivo:</label>
   <input id="arch" type="file" name="excel" />
   <input type="hidden" value="upload" name="action" />
</div>
   
<div class="caj_new_c">
    <input type="submit" name="subir_btn" value="Cargar Consentrado" >
</div>
</form>
</fieldset>
 