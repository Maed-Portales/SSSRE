<?php   

include ("../contenido/session.php");
include ("../contenido/head.php");

if ($tipo == "1") { header ("Location: ../Alumno");  }  
?>
<body>
        <?php  include ("../contenido/header.php"); ?>
    <div class="conteniner">
	<div class="txt_hdr">
		Seguimiento de Servicio Social, Residencias y Egresados
		</div>
            <div class="barra_user">
                <?php include("contenido/menu_adm.php"); ?>
                <div class="user">
                   <?php echo $usuario; ?> |  
                    <a href="../contenido/desconectar_usuario.php" title="Salir">
                    <span class="icon-user-times"></span></a>
                </div>
            </div>
        <aside id="Caja_Contenido_cen">
            <?php  include(@$contenido); ?>
        </aside> <!-- FIN contenido_tematico   -->
            <?php include('../contenido/footer.html') ?>
    </div> <!-- Fin de conteniner --> 
