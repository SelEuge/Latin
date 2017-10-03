<?php 
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
<title>Menu de Administración</title>
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
     	      NavegacionADMI();//LLama a la función que contiene el Menú?> 
     	    </div><!-- Fin MENU -->     
      
           <div id="contenido"> <!-- Inicio bloque CONTENIDO --> 
             
               <?php 
				 include 'MenuAdministracion.php';?>
				
				     <br><br> <a href=listarVentas.php>  Listar Ventas</a><br><br>
					   1 - Accesorios     <?php opcion(1);?><br>												
					   2 - Bongoes        <?php opcion(2);?><br>	
					   3 - Congas         <?php opcion(3);?><br>	
					   4 - Djembes   	  <?php opcion(5);?><br>	
					   5 - Fundas         <?php opcion(6);?><br>	
					   6 - Mini Percusion <?php opcion(7);?><br>	
					   7 - Timbales       <?php opcion(8);?><br>					         
            </div> <!-- Fin bloque CONTENIDO -->
           
                 
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>

