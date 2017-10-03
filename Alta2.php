<?php 
session_start();
if (($_SESSION['estado'] == false) OR !($_SESSION['rol'] == 'Administrador')){
	header('Location: index.php');
}
$url = $_SERVER['REQUEST_URI'];
$_SESSION['url_pag'] = $url;


$msjNombre =''; $msjmodelo = '';$msjTipo ='';$msjPrecio ='';
$msjStock ='';$msjDescripcion = '';
//------------------------------------------------------------------------//
function esString ($valor){
	$resp = true;
	for($i=0;$i<strlen($valor);$i++){
		if(is_numeric(substr($valor, $i,1))){
			$resp = false;
		}
	}
	return $resp;
}
//------------------------------------------------------------------------//

//------------------------------------------------------------------------//

if (isset($_POST['guardar'])) {
	$codigo = $_GET['valor'];
	$nombre = trim($_POST['nombre']); // Marca del producto
	$modelo = trim($_POST['modelo']);
	$tipo   = trim($_POST['tipo']);
	$precio = trim($_POST['precio']);
	$ruta	=$_FILES["ruta"];
	$descripcion=trim($_POST['descripcion']);
	$ruta_grande=$_FILES["ruta_grande"];
	//$ruta_grande=trim($_POST['ruta_grande']);
	$stock 		= trim($_POST['Stock']);
	//$estado 	= trim($_POST['estado']);
	$error = false;
	//$fila = $_SESSION['registro'];
	
	
	$rutaDestino= "animacion";//nombre de la carpeta destino de imagenes
	$rutaDestino2= "animacion";
	//$rutaDestino2= "animacion";//nombre de la carpeta destino de imagenes
	
	/*$archivotemporal1=$_FILES['ruta']['tmp_name'];
	$archivotemporal2=$_FILES['ruta_grande']['tmp_name'];
	
	$nombreArchivo1=$_FILES['ruta']['name'];
	$nombreArchivo2=$_FILES['ruta_grande']['name'];*/

	if(empty($descripcion)){
		$msjDescripcion = "Debe escribir la descripción del instrumento";
		$error = true;
		//$fila['nombre'] = $nombre;
	}
	
	
	if(empty($nombre)){
		$msjNombre = "Debe escribir el nombre del instrumento";
		$error = true;
		//$fila['nombre'] = $nombre;
	}else{
		//$fila['nombre'] = $nombre;
	}
	if(empty($modelo)){
		$msjmodelo = "*Debe escribir el modelo";
		$error = true;
		//$fila['modelo'] = $modelo;
	}
	
	if($tipo < 0){
		$msjTipo = "*Número inválido";
		//$fila['tipo'] = $tipo;
	}else if (!is_numeric($tipo)) {
		$msjTipo = "*Verifique el campo. Debe ser numérico";
		$error = true;
		//$fila['tipo'] = $tipo;
	}else {
		//$fila['tipo'] = $tipo;
	}
	
	if(empty($precio)){
		$msjPrecio = "*Debe escribir el precio";
		$error = true;
		$fila['precio'] = '';
	}else if(!is_numeric($precio)){
		$msjPrecio = "*Debe ser numérico";
		$error = true;
		//$fila['precio'] = $precio;
	}else if($precio <= 0){
		$msjPrecio = "Precio invalido";
		$error = true;
		//$fila['precio'] = $precio;
	}else{
		//$fila['precio'] = $precio;
	}
	
	if($stock < 0){
		$msjStock = "*Número inválido";
		//$fila['Stock'] = $stock;
	}else if (!is_numeric($stock)) {
		$msjStock = "*Debe ser numérico";
		$error = true;
		//$fila['Stock'] = $stock;
	}else {
		//$fila['Stock'] = $stock;
	}
	
	//if(!isset($nombreArchivo1)){
	//	$msjImgCh = "*Seleccione el Archivo";
	//	$error = true;
	//}
	//if(empty($nombreArchivo2)){
	//	$msjImgGr = "*Seleccione el Archivo";
	//	$error = true;
	//}
	
	
	//$_SESSION['registro'] = $fila;
	
	if(!$error){
		include ('Conexion.php');		

		$existe = "SELECT * FROM productos WHERE nombre='$nombre' AND modelo ='$modelo'";
		$resultado = mysql_query($existe);
		$registros = mysql_num_rows($resultado);
		
		if($registros == FALSE){
			//$nombre_fichero = $res_marca['marca']."_".$res_modelo['modelo'].".png";
			
			
			$rutaDestino=$rutaDestino."/".$modelo.".png";
			$rutaDestino2=$rutaDestino2."/".$modelo."_grande.png";
			
			move_uploaded_file($ruta["tmp_name"],$rutaDestino);
			move_uploaded_file($ruta_grande["tmp_name"],$rutaDestino2);
			
			
							
			
			$consulta = "INSERT INTO productos (codigo,nombre,modelo,tipo,precio,ruta,descripcion,ruta_grande,Stock,estado)
			VALUES (NULL,'$nombre','$modelo','$tipo','$precio','$rutaDestino','$descripcion','$rutaDestino2','$stock','alta')";
			$sentencia = mysql_query($consulta) or die('Error: '.mysql_error());
			header("Location: Alta2.php?registrado=true");
		}else{
			$reg = mysql_fetch_array($resultado);
			if($reg['estado'] == 'baja'){
				mysql_query("UPDATE productos SET estado = 'alta' WHERE nombre='$nombre' AND modelo ='$modelo'");
			}else{
				echo "<script> alert('El producto que intenta ingresar ya exite') </script>";
			
			    }
	        }
	}
}	
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
	
				<?php if (!isset($_GET['registrado'])) {
							echo "<form id =contacto action='' method=POST enctype=multipart/form-data>";
							echo "<fieldset>";
								echo "<legend>Información del Instrumento a AGREGAR</legend>";
								echo "<table>";
									//echo "<tr><td>Código: </td><td><input size=30 type=text name=codigo></td></tr>";
									
								//**************************************CAMPO NOMBRE**************************************//
								
								if (isset($msjNombre)) {	
									 echo "<tr><td>Nombre: </td><td><input size=30 type=text name=nombre value=$nombre><br><span> ".$msjNombre." </span></td></tr>"; 
								}else{	
								     echo "<tr><td>Nombre: </td><td><input size=30 type=text name=nombre value=$nombre></td></tr>";
								     } 

								//**************************************CAMPO MODELO**************************************//
								
								if (isset($msjmodelo)) {
								     echo "<tr><td>Modelo: </td><td><input size=30 type=text name=modelo value=$modelo><br><span> ".$msjmodelo." </span></td></tr>"; 
								 }else{
								     echo"<tr><td>Modelo: </td><td><input size=30 type=text name=modelo value=$modelo></td></tr>";
								     } 
								     
							   //**************************************CAMPO TIPO**************************************//
							   
								if (isset($msjTipo)) {    
								     echo "<tr><td>Tipo:   </td><td><input size=1 type=text name=tipo value=$tipo><br><span> ".$msjTipo." </span></td></tr>";
								  }else{   
 										echo "<tr><td>Tipo:   </td><td><input size=1 type=text name=tipo value=$tipo></td></tr>";
 										} 
 										
 							//**************************************CAMPO STOCK**************************************//
								if (isset($msjStock)) {
								     echo "<tr><td>Stock:</td><td> <input size=2 type=text name=Stock value=$stock><br><span> ".$msjStock." </span></td></tr>";
								     }else{
                                          "<tr><td>Stock:</td><td> <input size=2 type=text name=Stock value=$stock></td></tr>";
										} 
										
							   //**************************************CAMPO PRECIO**************************************//
								
								if (isset($msjPrecio)) {
								     echo "<tr><td>Precio: </td><td><input size=8 type=text name=precio value=$precio><br><span> ".$msjPrecio." </span></td></tr>";
								     }else{
								     echo "<tr><td>Precio: </td><td><input size=8 type=text name=precio value=$precio></td></tr>";
							   	     } 
							   	     
							//**************************************CAMPO IMAGEN CHICA**************************************//

							   	 if (isset($msjImgCh)) {
								     echo "<tr><td>Imagen Chica: </td><td>  <input type=file name=ruta value=$nombreArchivo1><br><span> ".$msjImgCh." </span></td></tr>";
								     }else{
									echo "<tr><td>Imagen Chica: </td><td>  <input type=file name=ruta value=$nombreArchivo1></td></tr>";//SOLICITA EL NOMBRE DEL ARCHIVO CON LA IMAGEN CHICA
										} 
										
							  //**************************************CAMPO IMAGEN GRANDE**************************************//
								
								if (isset($msjImgGr)) {
								     echo "<tr><td>Imagen Grande:</td><td> <input type=file name=ruta_grande value=$nombreArchivo2><br><span> ".$msjImgGr." </span></td></tr>";
								     }else{
								     echo "<tr><td>Imagen Grande:</td><td> <input type=file name=ruta_grande value=$nombreArchivo2></td></tr>";
								     }
								     
							    //**************************************CAMPO DESCRIPCION**************************************//
								     if (isset($msjDescripcion)) {
								     echo "<tr><td>Descripción: </td><td> <textarea cols=32 rows=2 name= descripcion value=$descripcion></textarea><br><span> ".$msjDescripcion." </span></td></tr>";
								     }else{
								     echo "<tr><td>Descripción: </td><td> <textarea cols=32 rows=2 name= descripcion value=$descripcion></textarea></td></tr>";
								     }
								     //**************************************CAMPO BOTONES**************************************//
								     //echo "<tr><td>Estado:</td><td> <input size=4 type=text name=estado></td></tr>";
									echo "<tr><td colspan=2><input id=btn2 required=required type=submit value=Guardar name=guardar>";
									echo"<a id=btn2a href=Administracion.php?>Cancelar</a>";

									echo"</td></tr>";
								
									echo "</table><br>";
							echo "</fieldset>";
						echo "</form>";
						}else{
							echo" <script>
											alert('¡Se ha Guardado con Éxito!');
											window.location='Administracion.php';
								  </script>";
							//echo "Se ha registrado con Éxito";
							unset($registrado);
								
}?>
				
				 </div>     
            </div> <!-- Fin bloque CONTENIDO -->
           
                 
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>
