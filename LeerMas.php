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
<title>Comercializacion</title>
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
     	   
     <div id="menu"> <!-- Inicio bloque NAVEGACIÓN -->
     	   	<?php include 'Fn_deLinks.php';
     	   	Navegacion();?>     	   
     	  </div> <!-- Fin bloque NAVEGACIÓN -->
      
        <div id="contenido"> <!-- Inicio bloque CONTENIDO -->
        <div id="comercializacion"> <!-- Inicio bloque COMERCIALIZACION-->
			 <p>Para agilizar el envío, es muy importante enviar por fax: 011-4613-7797  o e-mail: avellanedamoda@gmail.com el comprobante de su ingreso. 
         	<br><br>¿Cuál es el costo de envío?
			<br><br>El costo de envío será mostrado en base al total de la compra y ubicación, en el checkout, en el momento previo a la compra.
         	<br><br>¿Cómo se realizan los envíos?
			<br><br>Trabajamos con todas las empresas de transporte y encomienda del país.
         	<br><br>¿Dónde puedo recibir mi pedido?
			<br><br>Realizamos envíos a todo el país.
			<br><br>¿Cuál es el plazo para realizar un cambio?
			<br><br>Puedes solicitar un cambio hasta 15 días luego de realizada la compra.
			<br><br>¿Qué debo hacer si el instrumento no llega en buen estado?
			<br><br>Ponte en contacto con nosotros a Lp-RepreEnCorrientes@gmail.com y te enviaremos uno nuevo.
			</p>    
			<br><br><a href='Comercializacion.php' title='ATRAS'>ATRAS</a>  
         </div><!-- Fin bloque COMERCIALIZACION -->        
     	</div>   <!-- Fin bloque CONTENIDO -->     
         
                      
           <div id="pie">
          <?php include 'Pie.php';
          Pie();?>
  		 </div> 
           </div>

</body>
</html>
