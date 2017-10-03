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
            <p>Ésta es una recopilación de las preguntas más frecuentes que, según nuestra experiencia, pueden surgirle durante su visita a nuestra tienda on-line.<br><br>
            ¿Qué pasos he de seguir para comprar algún instrumento?
 			<br><br>Los artículos de nuestro catálogo de instrumentos están divididos en distintas categorías. Una vez dentro de cada categoría podrá ver la gran variedad de modelos de cada uno.
            <br><br>¿Qué pasa si un instrumento viene fallado?
			<br><br>Todas los instrumentos cuentan con un control de calidad, en caso de no estar conforme con el producto debe realizar la devolución dentro de los 15 días y se lo cambiaremos por otro producto.
            <br><br>¿Los precios incluyen IVA?
 			<br><br>Los precios de nuestro catálogo de ropa de mujer figuran con IVA.
			<br><br>Hacen facturas?
			<br><br> Hacemos Factura A y B.
			<br><br>¿Qué formas de pago admiten?
 			<br><br>El medio más habitual y más económico es mediante transferencia a nuestra cuenta. El número de cuenta se facilitará una vez realizado el pedido por el mayorista. O puede abonar en efectivo en nuestro local Pellegrini 1250.
			<br><br>Disponemos de los siguientes medios de pago:<br><br>			   
           	<img src="animacion/tarjetas/mastercard.png">
         	<img src="animacion/tarjetas/american.png">
         	<img src="animacion/tarjetas/banelco.png">
        	<img src="animacion/tarjetas/cabal.png">
         	<img src="animacion/tarjetas/pagofacil.png">
         	<img src="animacion/tarjetas/rapipago.png">
         	<img src="animacion/tarjetas/naranja.png">
         	<img src="animacion/tarjetas/shopping.png">
         	<img src="animacion/tarjetas/mercadolibre.png"><br><br>  
         		</p>   
         	<!--  <a href='LeerMas.php' title='Leer más'>Leer Más</a> -->
         	<a href='lpcomercializacion.pdf' target='blank' title='Leer más'>Leer Más</a>
         	        	
         	</div><!-- Fin bloque COMERCIALIZACION -->        
     	</div>   <!-- Fin bloque CONTENIDO -->     
         
                      
           <div id="pie">
          <?php include 'Pie.php';
          Pie();?>
  		 </div> 
           </div>

</body>
</html>
