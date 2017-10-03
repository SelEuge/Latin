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
           		         
				     <?php include 'Conexion.php';
				     	//CAPTURA EL TIPO DE INSTRUMENTO CUANDO EL USUARIO PRESIONA ALGUN ELEMENTO DE LA SUBLISTA DE "Galeria de Productos"
				     	 $tipoCodIstrum= $_GET['instrumento'];
				     	
				     	//DEVUELVE TODOS LOS PRODUCTOS DEL MISMO TIPO 
				     	$consulta="SELECT * FROM productos WHERE tipo='$tipoCodIstrum' AND estado = 'alta'";
						$resultado= mysql_query($consulta); //Devuelve el registro si encontro sino devuelve falso
						$cant_filas = mysql_num_rows($resultado);//Devuelve la cantidad de registros encontradas
						
						
						$cantImagenes=0;//Para ordenar las imagenes.						
						echo "<table id=Buscar>";//Crea una tabla para mostrar las imagenes de los instrumentos
						echo "<tr>";//Abre una fila
						while($registros=mysql_fetch_array($resultado)){//LO CONVIERTE EN UNA ARRAY PARA PODER MOSTRAR TODOS LOS PRODUCTOS DE UNA MISMA CATEGORIA
								if($cantImagenes == 3){//Permite cargar hasta 3 imagenes por fila
									echo "</tr>";//Cierra la fila
									echo "<tr>";//Inicia una nueva fila
									$cantImagenes= 0;
								}
							//La pág. DescripcionProducto le da un formato a la tabla de instrumentos
							//SE ENVIA A LA PAG. "DescripcionProducto" CUANDO EL USUARIO DIO CLICK A UNA IMAGEN	 					
							$imagen="<a href=DescripcionProducto.php?cod_instrumento=".$registros['codigo']."><img id=zoom src=".$registros['ruta']." alt=".$registros['descripcion']."></a>";
							$precio=$registros[precio];
							echo "<td>";//Abre una columna
							echo $imagen."<br>";//Imprime la variable "$imagen"
							echo "<h2>$ $precio<h2>";//Imprime la variable "$precio"
							echo"<img src=animacion/dibujo22.png>";
							echo "</td>";//Cierra la columna
							$cantImagenes++;
						}	
						echo "</tr>";
						echo "</table>";
					?>	
							
            </div> <!-- Fin bloque CONTENIDO -->
           
                 
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>