<?php //FUNCION AUXILIAR PARA LA ADMINISTRACION DE LA BD
function opcion($instrumento){ //$instrumento puede tomar los valores de 1-7 que son los tipos de instrumentos disponibles
	//echo $instrumento;
	echo "<div id=menuAdmi>";
	echo "<a href=Alta2.php?valor=".$instrumento.">  Agregar</a>";
	echo "<a href=BajaInstrumento.php?valor=".$instrumento.">    - Eliminar</a>";
	echo "<a href=ModificarInstrumento.php?valor=".$instrumento."> - Editar</a>";
	echo "</div>";
	
}
?>
