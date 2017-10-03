<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Ejercicio Nro. 3</title>
</head>
<body>

	<?php
		$tam=4;
	echo "<table border=1>";
		for($n1=1;$n1<=$tam;$n1++)
		{/*Recorre las filas $n1=fila 1*/
			echo "<tr>";
				for($n2=1;$n2<=$tam;$n2++)/*Recorre las columnas $n2=columna 1*/
			    echo"<td>".pow($n1,$n2)."<td>";
	        echo"</tr>";		
		}
	echo "</table>";		
	?>

</body>
</html>

