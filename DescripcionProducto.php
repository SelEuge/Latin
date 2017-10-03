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
<title>Descripcion Fotos Grandes</title>
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
             <div id="especificaciones">
             <?php
                        //CAPTURA EL cod_instrumento ENVIADA POR LA PAGINA DE "BuscarProducto" 
                        $instrum= $_GET["cod_instrumento"];
                        include 'Conexion.php';
                        
				     	$consulta="SELECT * FROM productos WHERE codigo='$instrum'";
						$resultado= mysql_query($consulta); //Devuelve el registro si encontro sino devuelve falso
						$cant_filas = mysql_num_rows($resultado);//Devuelve la cantidad de registros encontradas
                  
						//CONVERTIMOS EL RESULTADO EN UN ARRAY PARA PODER MOSTRAR TODAS LAS CARACTERISTICAS DEL INSTRUMENTO
						$instrumento=mysql_fetch_array($resultado);
												
						
						//echo $instrumento[precio];			
						//Muestra las descripciones del instrumento clickeado.
										
						echo "<fieldset id=o><br><img id=o  alt='' src=$instrumento[ruta_grande]>"; 
						echo"<br><br><b>Nombre:</b>$instrumento[nombre]<br><br><b>Modelo:</b> $instrumento[modelo]<br><br><b>Precio:</b> $$instrumento[precio]<br><br><b>Descripcion:</b><br><br><p> $instrumento[descripcion]</p><br><br>";
						if ($_SESSION['estado']) {
							echo "<a id=btn2baja href=carrito.php?codigo=".$instrum.">Comprar</a><br><br>";
						}
						echo"</fieldset>";
						
						?>					
             </div>
         
            </div> <!-- Fin bloque CONTENIDO -->
           
                 
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>

