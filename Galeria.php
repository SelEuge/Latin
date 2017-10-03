<?php 
session_start();
$url = $_SERVER['REQUEST_URI'];
$_SESSION['url_pag'] = $url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="EstiloIntegrador.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Galeria de Productos</title>
</head>
<body>
	  <div id="contenedor">
	  	   <div id="encabezado"> <!-- Inicio bloque ENCABEZADO -->
     	   <img src="animacion/LP-Header.jpg">
     	   <?php include 'FnEncabezado.php';
     	   		if($_SESSION['estado']==false){
     	   			Registrarse();
     	   			}else{
						  Registrado();
						  }
		    ?>
     	   </div> <!-- Fin bloque ENCABEZADO -->
     	   
           <div id="menu"> <!-- Inicio bloque NAVEGACIÓN -->
      	   	<?php include 'Fn_deLinks.php';
      	   	Navegacion();?>
     	   </div> <!-- Fin bloque NAVEGACIÓN -->
     	  
           <div id="contenido"> <!-- Inicio bloque CONTENIDO -->
         	
           </div> <!-- Fin bloque CONTENIDO -->
           
            <div id="pie"> <!-- Inicio bloque PIE -->
           	<?php include 'Pie.php';
           	Pie();?>	
           </div> <!-- Fin bloque PIE --> 		
     </div> <!-- Fin bloque CONTENEDOR -->
</body>
</html>