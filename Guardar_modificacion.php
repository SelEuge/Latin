<?php 
error_reporting(0);
session_start();
if (($_SESSION['auth'] == false) OR !($_SESSION['rol'] == 'Administrador')){
	header('Location: index.php');
}
$url = $_SERVER['REQUEST_URI'];
$_SESSION['url_pag'] = $url;
//include 'Fn_auxiliares.php';

if (isset($_POST['guardar_modif'])) {
	$nombre = trim($_POST['nombre']); // Marca del producto
	$modelo = trim($_POST['modelo']);
	$tipo   = trim($_POST['tipo']);
	$precio = trim($_POST['precio']);
	$ruta	=trim($_POST['ruta']);
	$descripcion=trim($_POST['descripcion']);
	$ruta_grande=trim($_POST['ruta_grande']);
	$stock 		= trim($_POST['Stock']);
	$estado 	= trim($_POST['estado']);
	$error = false;
	$fila = $_SESSION['registro'];

	$codigo = $_GET['valor'];

	if(empty($nombre)){
		$msjNombre = "El campo esta vacio";
		$error = true;
		$fila['nombre'] = $nombre;
	}else if (!esString($nombre)) {
		$fila['nombre'] = $nombre;
		$msjNombre = "No puede contener Numeros";
		$error = true;
	}else{
		$fila['origen'] = $origen;
	}

	if(empty($alto)){
		$msjAlto = "El campo esta vacio";
		$error = true;
		$fila['alto'] = '';
	}else if(!is_numeric($alto)){
		$msjAlto = "Debe ser numerico";
		$error = true;
		$fila['alto'] = $alto;
	}else if ($alto <= 0) {
		$msjAlto = "Alto Invalido";
		$error = true;
		$fila['alto'] = $alto;
	}else{
		$fila['alto'] = $alto;
	}

	if(empty($ancho)){
		$msjAncho = "El campo esta vacio";
		$error = true;
		$fila['ancho'] = '';
	}else if(!is_numeric($ancho)){
		$msjAncho = "Debe ser numerico";
		$error = true;
		$fila['ancho'] = $ancho;
	}else if ($ancho <= 0) {
		$msjAncho = "Ancho Invalido";
		$error = true;
		$fila['ancho'] = $ancho;
	}

	if(empty($profundidad)){
		$msjProf = "El campo esta vacio";
		$error = true;
		$fila['profundidad'] = '';
	}else if(!is_numeric($profundidad)){
		$msjProf = "Debe ser numerico";
		$error = true;
		$fila['profundidad'] = $profundidad;
	}else if($profundidad <= 0){
			$msjProf = "Profundidad invalida";
			$error = true;
			$fila['profundidad'] = $profundidad;
	}else{
		$fila['profundidad'] = $profundidad;
	}

	if($stock < 0){
		$msjStock = "Numero invalido";
		$fila['stock'] = $stock;
	}else if (!is_numeric($stock)) {
		$msjStock = "Verifique el campo";
		$error = true;
		$fila['stock'] = $stock;
	}else {
		$fila['stock'] = $stock;
	}

	if(empty($precio)){
		$msjPrecio = "El campo esta vacio";
		$error = true;
		$fila['precio'] = '';
	}else if(!is_numeric($precio)){
		$msjPrecio = "Debe ser numerico";
		$error = true;
		$fila['precio'] = $precio;
	}else if($precio <= 0){
		$msjPrecio = "Precio invalido";
		$error = true;
		$fila['precio'] = $precio;
	}else{
		$fila['precio'] = $precio;
	}

	$_SESSION['registro'] = $fila;

	if ($error == false) {
		include 'Conectar.php';
		$consulta = "UPDATE productos SET marca='".$marca."', modelo='".$modelo."', origen='".$origen."', alto='".$alto."', ancho='".$ancho."', profundidad='".$profundidad."', stock='".$stock."', precio='".$precio."', estado = '1'
					WHERE codigo_articulo = '".$cod_prod."'";
		mysql_query($consulta) or die('Error '.mysql_error());
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
     	      Navegacion();//LLama a la función que contiene el Menú?> 
     	    </div><!-- Fin MENU -->     
      
           <div id="contenido"> <!-- Inicio bloque CONTENIDO --> 
             
               
            
         
            </div> <!-- Fin bloque CONTENIDO -->
           
                 
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>

