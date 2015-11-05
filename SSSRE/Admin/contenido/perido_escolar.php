<div class="peridos">

	<?php $perido_escolar=[2015,2014,2013,2012,2011,2010,2009,2008]; 
	?>
	
<table name="contenido_fls">
	<tr> <?php foreach ($perido_escolar as $i => $año) {  ?> 
		<th > <?php echo "Perido Escolar: ".$año; ?> | <img class="gabeta" src="res/directories.png"></th>
	</tr>
	</tr>	
		<td> <img class="folder" src="res/folder.ico">  <span  class="p_text"><a > Febrero - Julio </a></span>  </td>
	 </tr>
	<tr>	
		<td> <img class="folder" src="res/folder.ico">  <span  class="p_text"> Agosto - Enero  </span>  </td>
	</tr>  <?php } ?> 
 
</table>

</div>