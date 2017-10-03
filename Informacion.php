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
<title>Informacion de Contacto</title>
</head>
<body>
	   <div id="contenedor">
	  	   <div id="encabezado"> <!-- Inicio bloque ENCABEZADO -->
     	    <img src="animacion/LP-Header.jpg">
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
     	       
         <div id="contenido"> <!-- Inicio bloque CONTENIDO -->
           <ul id="columIzqu">
           <iframe src="https://www.google.com/maps/d/embed?mid=z4Ss0IJMOlwk.kLh1XQsfP6wE" width="340" height="380"></iframe>
	        <li>Dirección: Pellegrini 1250</li>
         	<li>Teléfono:(379)4-441520</li>
         	<li>FAX:</li>
         	<li>Correo Electrónico:<br>Lp-RepreEnCorrientes@gmail.com</li>
         	<li>Horarios Comerciales:Lunes a Sábados de <br>8 hs. 13 hs.</li>
         	</ul>
         </div> <!-- Fin bloque CONTENIDO -->
           
          <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
          
           		
       </div> <!-- Fin bloque CONTENEDOR -->
</body>
</html>