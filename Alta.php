<?php 
session_start();
if (($_SESSION['estado'] == false) OR !($_SESSION['rol'] == 'Administrador')){
	echo"<script>
					alert('Autorización de acceso solo para el ADMINISTRADOR!');
					window.location='index.php';
			</script>";
}
$url = $_SERVER['REQUEST_URI'];
$_SESSION['url_pag'] = $url;
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
     	      Navegacion();//LLama a la función que contiene el Menú     	    
				?> 
     	    </div><!-- Fin MENU -->     
      
           <div id="contenido"> <!-- Inicio bloque CONTENIDO --> 
           <?php include 'Conexion.php'; // Conectamos con BD?>       
  
				<div id="formulario">
				<!--  <p ><font size="12 sans-serif">Administracion de Base de Datos</font></p>	-->				
				<?php 
					$instrumento = $_GET['valor'];//Viene de la pag de administracion (admi2). OBTIENE EL TIPO DE INSTRUMENTO
							echo "<form id =contacto action=Guardar_instrumento.php?valor=".$instrumento." method=POST enctype=multipart/form-data>";
							echo "<fieldset>";
								echo "<legend>Información del Instrumento a AGREGAR</legend>";
								echo "<table>";
									//echo "<tr><td>Código: </td><td><input size=30 type=text name=codigo></td></tr>";
									echo "<tr><td>Nombre: </td><td><input size=30 type=text name=nombre></td></tr>";
									echo "<tr><td>Modelo: </td><td><input size=30 type=text name=modelo></td></tr>";
									echo "<tr><td>Tipo:   </td><td><input size=1 type=text name=tipo></td></tr>";
									echo "<tr><td>Stock:</td><td> <input size=2 type=text name=Stock></td></tr>";
									echo "<tr><td>Precio: </td><td><input size=8 type=text name=precio></td></tr>";
									echo "<tr><td>Imagen Chica: </td><td>  <input type=file name=ruta></td></tr>";//SOLICITA EL NOMBRE DEL ARCHIVO CON LA IMAGEN CHICA
									echo "<tr><td>Imagen Grande:</td><td> <input type=file name=ruta_grande></td></tr>";//SOLICITA EL NOMBRE DEL ARCHIVO CON LA IMAGEN GRANDE
									echo "<tr><td>Descripción: </td><td> <textarea cols=32 rows=5 name= descripcion></textarea></td>";
									//echo "<tr><td>Estado:</td><td> <input size=4 type=text name=estado></td></tr>";
									echo "<tr><td colspan=2><input id=btn2 required=required type=submit value=Guardar>";
									echo"<a id=btn2a href=Administracion.php?>Cancelar</a>";
									echo"</td></tr>";
								echo "</table><br>";
							echo "</fieldset>";
						echo "</form>";
				
				?>  </div>     
            </div> <!-- Fin bloque CONTENIDO -->
           
                 
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>
