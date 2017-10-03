<?php session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="EstiloIntegrador.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Terminos y Usos</title>
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
     	      Navegacion();//LLama a la funci�n que contiene el Men�?> 
     	   </div><!-- Fin MENU --> 
      
           <div id="contenido"> <!-- Inicio bloque CONTENIDO -->
          <div id="contenidoTeryUsos">
			<p >T�rminos de Uso<br>
			Bienvenido a www.lpmusic.com (el "Sitio de Latin Percussion"), el cual es presentado por KMC Music Corporation ("KMC Music") con fines de informaci�n solamente. Al acceder y explorar este sitio usted ("usted" se refiere a cualquier individuo o entidad de la cual dicho individuo sea un empleado o representante) acepta los t�rminos presentados a continuaci�n.
			LICENCIA LIMITADA
			KMC Music le concede un permiso limitado, no-exclusivo, no transferible de acceder y hacer s�lo uso personal de este sitio y sus materiales incorporados, sujeto a leyes aplicables y los t�rminos descritos aqu� (la "Licencia Limitada"). Esta Licencia Limitada no cede ning�n derecho o licencia bajo ninguna patente, marca registrada, derecho de autor u otro derecho propietario de KMC Music o cualquier tercera entidad ni constituye una transferencia de t�tulo a este sitio de KMC Music o cualquiera de los materiales contenidos en �ste. Esta Licencia Limitada tambi�n est� sujeta a las siguientes restricciones: 1) cualquier copia del material del sitio debe retener todos los avisos de derecho de autor y dem�s avisos de derechos de propiedad de KMC Music 2) este sitio no puede ser modificado de ninguna manera ni copiado, presentado, distribuido o de otra manera usado para prop�sitos p�blicos o comerciales de cualquier �ndole; y 3) no puede hacerse ning�n uso derivativo de este sitio.
			Si usted hace cualquier uso no-autorizado de este sitio de KMC Music, esta Licencia Limitada terminar� autom�ticamente y usted podr� ser acusado, adem�s, de haber violado leyes federales y/o estatales. KMC Music se abocar� a iniciar un proceso legal contra dichas personas o entidades, buscando una compensaci�n hasta el m�ximo l�mite que permita la ley.
			RED DE SITIOS SUBSIDIARIOS DE KMC MUSIC
			Este sitio de KMC Music sirve tambi�n como portal hacia varios sitios Web operados por subsidiarias de KMC Music. Por favor tome nota de que estos sitios subsidiarios pueden adoptar t�rminos de uso pertinentes a dicha subsidiaria. Mientras estos t�rminos de uso aplican a este sitio de KMC Music en su totalidad, si una subsidiaria de KMC Music establece t�rminos adicionales a los de este sitio, dichos t�rminos tambi�n ser�n v�lidos. Adem�s, las ventas hechas en relaci�n con sitios de subsidiarias de KMC Music que ofrezcan productos o servicios a la venta estar�n sujetos a los t�rminos y condiciones de venta como una condici�n de la transacci�n. Dichos t�rminos de venta estar�n expuestos en el sitio de la subsidiaria o descritos en un acuerdo por separado. Su transacci�n ser� regida por dichos t�rminos y usted deber� revisarlos cuidadosamente.
			USUARIOS INTERNACIONALES
			Este Sitio de KMC Music es mantenido por KMC Music Corporation en el Estado de Nueva Jersey, E.U.A. KMC Music no hace ninguna representaci�n de que este sitio est� disponible para uso en localidades fuera de los Estados Unidos. Si usted accede a este sitio desde localidades que est�n fuera de Estados Unidos, usted es responsable por cumplir las leyes pertinentes. Queda prohibido el acceso a este Sitio de KMC Music desde localidades donde su contenido sea ilegal. Las leyes del Estado de Connecticut rigen este Sitio de KMC Music sin importar cualquier principio de conflicto legal.
			ENVIO DE INFORMACION
			Por favor no env�e informaci�n que considere exclusiva a este Sitio de KMC Music a menos de que una subsidiaria de KMC Music le provea un acuse de recibo de dicha informaci�n. Cualquier env�o de materiales a KMC Music ser� considerado como una contribuci�n a KMC Music y podr� ser usada a discreci�n, sin importar reservaciones de propiedad de derechos indicados en dichos env�os. Usted acepta que cualquier material, incluyendo comentarios, preguntas, sugerencias, ideas, dibujos u otro contenido que provea a este Sitio de KMC Music no es confidencial y se convertir� en la propiedad exclusiva de KMC Music.
			CAMBIOS.			
			</p>
			</div>
           </div> <!-- Fin bloque CONTENIDO -->           
                
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
           		
       </div> <!-- Fin bloque CONTENEDOR -->
</body>
</html>
