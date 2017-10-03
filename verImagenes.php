<?php
include 'Conexion.php';

//consulta
  $consulta=mysql_query("SELECT ruta, nombre FROM productos");
  
  echo "<table border='2'>
  			<tr>
  				<th width='150' height='25'>Imagen</th>
  				<th width='150' height='25'>Texto</th>
  			</tr>";
  
  
  
  
  //$imagenes: se guardara el arreglo donde estan todos los registros del array
  while ($imagenes=mysql_fetch_array($consulta)){
  	
  	$imagen=$imagenes['ruta'];
  	$texto=$imagenes['nombre'];
  	echo "<table border='2'>
  			<tr>
  				<td width='150' height='100'><img src='$imagen' width='150' height='100'></td>
  				<td width='150' height='100'>$texto</td>
  			</tr>";
  
  }

  echo "</table>";
?>