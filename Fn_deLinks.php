
<?php
function Navegacion(){
	echo "<ul id=navi>";
	echo "<li><a href=index.php title='Ir a Inicio'>Inicio <img alt=a src=animacion/inicio-icono-6831-48.png></a></li>";
	echo "<li><a href=QuienesSomos.php title='Ir a Quienes somos'>Quienes somos</a></li>";
	echo "<li><a title='Ir a Galeria de Productos'>Galeria de Productos</a>";
	echo		"<ul>";
	echo		"<li><a href=BuscarProducto.php?instrumento=1 title='Ir a ver Accesorios'>Accesorios</a></li>";
	echo		"<li><a href=BuscarProducto.php?instrumento=2 title='Ir a ver Bongos' >Bongos</a></li>";
	echo		"<li><a href=BuscarProducto.php?instrumento=3 title='Ir a ver Congas'>Congas</a></li>";
	//echo		"<li><a href=BuscarProducto.php?instrumento=4 title='Ir a ver Cowbells' >Cowbells</a></li>";
	echo		"<li><a href=BuscarProducto.php?instrumento=5 title='Ir a ver Djembes' >Djembes</a></li>";
	echo		"<li><a href=BuscarProducto.php?instrumento=6 title='Ir a ver Fundas'>Fundas</a></li>";
	echo		"<li><a href=BuscarProducto.php?instrumento=7 title='Ir a ver Mini Percussion'>Mini Percussion</a></li>";
	echo		"<li><a href=BuscarProducto.php?instrumento=8 title='Ir a ver Timbales'>Timbales</a></li>";
	echo		"</ul>";
	echo"</li>";
	echo "<li><a href=Comercializacion.php title='Ir a Comercializacion'>Comercializacion</a></li>";
	echo "<li><a href=Consultas.php title='Ir a Consultas online'>Consultas online</a></li>";
	echo "<li><a href=Informacion.php title='Ir a Contacto'>Informacion de Contacto</a></li>";
	echo "</ul>";
}
//-----------------------------------------------------
//menu de navegacion del admi
	function NavegacionADMI(){
		echo "<ul id=navi>";
		echo "<li><a href=index.php title='Ir a Inicio'>Inicio <img alt=a src=animacion/inicio-icono-6831-48.png></a></li>";
		echo "<li><a href=QuienesSomos.php title='Ir a Quienes somos'>Quienes somos</a></li>";
		echo "<li><a title='Ir a Galeria de Productos'>Galeria de Productos</a>";
		echo"</li>";
		echo "<li><a href=Comercializacion.php title='Ir a Comercializacion'>Comercializacion</a></li>";
		echo "<li><a href=Consultas.php title='Ir a Consultas online'>Consultas online</a></li>";
		echo "<li><a href=Informacion.php title='Ir a Contacto'>Informacion de Contacto</a></li>";
		echo "</ul>";
}
?>
<!--echo "<li><a href=Galeria.php title='Ir a Galeria de Productos'>Galeria de Productos</a>";-->