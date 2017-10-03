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
<title>Baja de Instrumentos</title>
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
            <div id="especificaciones"><!-- Inicio de bloque TABLA + DESCRIPCION -->
              <?php 
            		$codInstrumento = $_GET['valor'];
					include 'Conexion.php';
					$consulta = "SELECT * FROM productos WHERE codigo='$codInstrumento'";
					$resultado = mysql_query($consulta);
					$cant_filas = mysql_num_rows($resultado);	
				
					if($cant_filas == 1){
						$instrumento = mysql_fetch_array($resultado);
						//echo "<div>";				
						echo "<fieldset id=bajaInst><br><img id=bajaInst  alt='' src=$instrumento[ruta_grande]>";
						echo"<br><br><b>Nombre:</b>$instrumento[nombre]<br><br><b>Modelo:</b>$instrumento[modelo]<br><br><b>Precio:</b> $instrumento[precio]<br><br><b>Descripcion:</b><br><br><p> $instrumento[descripcion]</p><br><br>";
						echo "<fieldset id=preg>¿Confirma que desea eliminar este instrumento LP?<br><br>";
						echo "<a id=btn2baja href=EliminarProducto.php?valor=".$instrumento['codigo']."$tipo=".$instrumento['tipo'].">Eliminar</a>";
						echo "<a id=btn2baja href=BajaInstrumento.php?valor=".$instrumento['tipo'].">Cancelar</a></fieldset>";
						//echo "<tr><td colspan=4 align=center><input id=btn2 type=submit value= Enviar></td></tr>";
						echo"</fieldset>";
}
				?>
				  </div> <!-- FIN bloque TABLA + DESCRIPCION -->
            </div> <!-- Fin bloque CONTENIDO -->        
            
           
                 
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>

