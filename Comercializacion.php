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
     	   
     <div id="menu"> <!-- Inicio bloque NAVEGACI�N -->
     	   	<?php include 'Fn_deLinks.php';
     	   	Navegacion();?>     	   
     	  </div> <!-- Fin bloque NAVEGACI�N -->
      
        <div id="contenido"> <!-- Inicio bloque CONTENIDO -->
       	 <div id="comercializacion"> <!-- Inicio bloque COMERCIALIZACION-->
            <p>�sta es una recopilaci�n de las preguntas m�s frecuentes que, seg�n nuestra experiencia, pueden surgirle durante su visita a nuestra tienda on-line.<br><br>
            �Qu� pasos he de seguir para comprar alg�n instrumento?
 			<br><br>Los art�culos de nuestro cat�logo de instrumentos est�n divididos en distintas categor�as. Una vez dentro de cada categor�a podr� ver la gran variedad de modelos de cada uno.
            <br><br>�Qu� pasa si un instrumento viene fallado?
			<br><br>Todas los instrumentos cuentan con un control de calidad, en caso de no estar conforme con el producto debe realizar la devoluci�n dentro de los 15 d�as y se lo cambiaremos por otro producto.
            <br><br>�Los precios incluyen IVA?
 			<br><br>Los precios de nuestro cat�logo de ropa de mujer figuran con IVA.
			<br><br>Hacen facturas?
			<br><br> Hacemos Factura A y B.
			<br><br>�Qu� formas de pago admiten?
 			<br><br>El medio m�s habitual y m�s econ�mico es mediante transferencia a nuestra cuenta. El n�mero de cuenta se facilitar� una vez realizado el pedido por el mayorista. O puede abonar en efectivo en nuestro local Pellegrini 1250.
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
         	<!--  <a href='LeerMas.php' title='Leer m�s'>Leer M�s</a> -->
         	<a href='lpcomercializacion.pdf' target='blank' title='Leer m�s'>Leer M�s</a>
         	        	
         	</div><!-- Fin bloque COMERCIALIZACION -->        
     	</div>   <!-- Fin bloque CONTENIDO -->     
         
                      
           <div id="pie">
          <?php include 'Pie.php';
          Pie();?>
  		 </div> 
           </div>

</body>
</html>
