
<?php
/*
if(isset($_POST["action"]))
{     $ia=$_POST["cant"];
   $yaar=$_POST['year'];
   $peridod=$_POST['periodo']; */
    
    @$archivo = $_FILES['file1']['name'];
    @$tipo = $_FILES['file1']['type'];
    @$destino = "bak_".$archivo;

/*if(copy($_FILES['excel']['tmp_name'],$destino)) 
{echo "<hr> Archivo Cargado Con Éxito <hr>";}
else {echo "Error Al Cargar el Archivo";}
*/

    
@$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
@$fileType = $_FILES["file1"]["type"]; // The type of file it is
@$fileSize = $_FILES["file1"]["size"]; // File size in bytes
@$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Debe buscar un archivo antes de hacer clic en el botón de subida.";
    exit();
}
if(copy($_FILES['file1']['tmp_name'],$destino)) {
    echo "$archivo no fue completado";
} else {
    echo "move_uploaded_file function failed";
}
    
    
        if (file_exists ("bak_".$archivo))
        {
                require ('../../Classes/PHPExcel.php');
                require ('../../Classes/PHPExcel/Reader/Excel2007.php');
                require ('../../contenido/conector.php');

                $objReader = new PHPExcel_Reader_Excel2007();
                $objPHPExcel = $objReader->load("bak_".$archivo);
                $objFecha = new PHPExcel_Shared_Date();
                // $objPHPExcel->setActiveSheetIndex(0);
                $highestRow = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

for ($i=2;$i<=$highestRow; $i++)
                    {
//$_DATOS_EXCEL[$i]['year']=$_POST['year'];
//$_DATOS_EXCEL[$i]['periodo']=$_POST['periodo'];
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
                $campo2 == "Creditos Acumulados" ? $sql.= $valor2."'); " : $sql.= $valor2."','";
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
/*
}

*/
   



?>