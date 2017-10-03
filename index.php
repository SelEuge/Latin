<?php 
session_start();
$url = $_SERVER['REQUEST_URI'];
$_SESSION['url_pag'] = $url;
//if ($_SESSION['estado'] == True){
//	header('Location: index.php');
//}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="EstiloIntegrador.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Inicio</title>
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
      
           <div id="contenido"> <!-- Inicio bloque CONTENIDO --> 
             
               <div id="columDer"> <!-- Inicio bloque IMAGEN -->                                          
				<img  alt="e" src="animacion/picasion.gif">	  
           	   </div> <!-- Fin bloque imagen gif -->
           
          	   <div id="columIzq"> <!-- Inicio bloque INICIO --> 
          		 <p align="justify">Bienvenidos al sitio oficial de LATIN PERCUSSION. Aquí encontrarás distintas secciones donde podrás accerder a ver nuestros productos y también comprarlos.</p>
            	 <img alt= "a" src="animacion/lp3.png">
            </div> <!-- Fin bloque INICIO -->
         
            </div> <!-- Fin bloque CONTENIDO -->
           
                 
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>
