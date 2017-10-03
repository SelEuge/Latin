<?php //ESTA PAGINA MUESTRA LOS INSTRUMENTOS DEL MISMO TIPO. PARA ELEGIR CUALES QUEREMOS ELIMINAR
session_start();
if (($_SESSION['estado'] == false) OR !($_SESSION['rol'] == 'Administrador')){
	header('Location: index.php');
}
$url = $_SERVER['REQUEST_URI'];
$_SESSION['url_pag'] = $url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="EstiloIntegrador.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Modificar Instrumentos</title>
</head>
<body>
	  <div id="contenedor"> <!-- Inicio bloque CONTENEDOR -->
	  
	  	   <div id="encabezado"> <!-- Inicio bloque ENCABEZADO -->
	  	      <img alt= "a" src="animacion/LP-Header.jpg">
	  	     <?php include 'FnEncabezado.php';
	  	       	 if ($_SESSION['estado'] == false){
	  	     		Registrarse();
	  	     		}else{
	  	     			Registrado();
	  	     		}  	     		
	  	     ?>
	  	   </div> <!-- Fin bloque ENCABEZADO -->
      
     	 
     	   	<div id="menu"><!-- Inicio bloque MENU -->	   
     	      <?php include 'Fn_deLinks.php';
     	      Navegacion();//LLama a la función que contiene el Menú?> 
     	    </div><!-- Fin MENU -->     
      
           <div id="contenido"> <!-- Inicio bloque CONTENIDO 
           <div id="formulario"> --> 
                   <?php 
				$instrumento = $_GET['valor'];
				$tipo= substr($instrumento, 0, 1);// capturamos el primer caracter que es el cod de tipo de producto, substr(string, star, length);

				include 'Conexion.php';
				$consulta = "SELECT * FROM productos WHERE tipo = '$tipo' AND estado = 'alta'";
				$resultado = mysql_query($consulta);
				
			
				echo "<table id=Eliminar>";
				echo "<tr>";
				while($registros=mysql_fetch_array($resultado)){
					if($cantImag == 3){
						echo "</tr>";
						echo "<tr>";
						$cantImag = 0;
					}
					echo "<td>";
					echo "<a href=ModifConfirmada.php?valor=".$registros['codigo']."><img src=$registros[ruta]></a><br>";
					echo "<b>Código:</b> ".$registros['codigo']."<br>";
					echo "<b>Nombre:</b> ".$registros['nombre']."<br>";
					echo "<b>Modelo:</b> ".$registros['modelo']."<br>";
					echo "<b>Stock:</b> ".$registros['Stock']."<br>";
					echo "<b>Tipo:</b> ".$registros['tipo']."<br>";
					echo "</td>";
					$cantImag ++;
				}
				echo "</tr>";
				echo "</table>";?> 			     
            </div> <!-- Fin bloque CONTENIDO -->
            
           
                 
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>
