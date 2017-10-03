<?php 
error_reporting(0);
session_start();
if (($_SESSION['auth'] == false) OR !($_SESSION['rol'] == 'Administrador')){
	//header('Location: index.php');
}
$url = $_SERVER['REQUEST_URI'];
$_SESSION['url_pag'] = $url;
//include 'Fn_auxiliares.php';

$msjNombre =''; $msjmodelo = '';$msjTipo ='';$msjPrecio ='';$msjStock ='';$msjestado = '';

//----------------------------------------------------------------------------------------//

//----------------------------------------------------------------------------------------//
function esString ($valor){
	$resp = true;
	for($i=0;$i<strlen($valor);$i++){
		if(is_numeric(substr($valor, $i,1))){
			$resp = false;
		}
	}
	return $resp;
}

//----------------------------------------------------------------------------------------//

//----------------------------------------------------------------------------------------//
if (isset($_POST['guardar_modif'])) {
	$nombre = trim($_POST['nombre']); // Marca del producto
	$modelo = trim($_POST['modelo']);
	$tipo   = trim($_POST['tipo']);
	$precio = trim($_POST['precio']);
	//$ruta	=trim($_POST['ruta']);
	$descripcion=trim($_POST['descripcion']);
	//$ruta_grande=trim($_POST['ruta_grande']);
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
		$fila['nombre'] = $nombre;
	}
	if(empty($estado)){
		$msjestado = "El campo esta vacio";
		$error = true;
		$fila['estado'] = $estado;
	}else if (!esString($estado)) {
		$fila['estado'] = $estadoe;
		$msjestado = "No puede contener Numeros";
		$error = true;
	}else{
		$fila['estado'] = $estado;
	}
	
	if(empty($modelo)){
		$msjmodelo = "El campo esta vacio";
		$error = true;
		$fila['modelo'] = $modelo;
	}
	
	if($tipo < 0){
		$msjTipo = "Numero invalido";
		$fila['tipo'] = $tipo;
	}else if (!is_numeric($tipo)) {
		$msjTipo = "Verifique el campo";
		$error = true;
		$fila['tipo'] = $tipo;
	}else {
		$fila['tipo'] = $tipo;
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
	
	if($stock < 0){
		$msjStock = "Número invalido";
		$fila['Stock'] = $stock;
	}else if (!is_numeric($stock)) {
		$msjStock = "Verifique el campo";
		$error = true;
		$fila['Stock'] = $stock;
	}else {
		$fila['Stock'] = $stock;
	}

	
	$_SESSION['registro'] = $fila;

	
	
		
	if ($error == false) {
		include 'Conexion.php';
		//marca='".$marca."', modelo='".$modelo."', origen='".$origen."', alto='".$alto."', ancho='".$ancho."', profundidad='".$profundidad."', stock='".$stock."', precio='".$precio."', estado = '1'
			//	WHERE codigo_articulo = '".$cod_prod."'";
		$consulta = "UPDATE productos SET nombre='".$nombre."',modelo='".$modelo."',tipo='".$tipo."',precio='".$precio."',ruta='".$fila['ruta']."',descripcion='".$descripcion."',ruta_grande='".$fila['ruta_grande']."',Stock= '".$stock."',estado='alta'
					WHERE codigo = '".$codigo."'";
		mysql_query($consulta) or die('Error '.mysql_error());
		

		$res=mysql_query($consulta);
		
		if(!$res){
			echo"
			<script>
				alert('No se pudo Modificar los datos!');
						
			</script>
		";
		
		}else{
			echo"
		<script>
				alert('El producto fue modificado con ÉXITO!');
				window.location='ModificarInstrumento.php?valor=$tipo';
		</script>
		";		
		}		
		}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="EstiloIntegrador.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Modificacion de Instrumentos</title>
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
                       
            <?php include 'Conexion.php'; // Conectamos con BD?>       
  
				<div id="formulario">
				<!--  <p ><font size="12 sans-serif">Administracion de Base de Datos</font></p>	-->				
				<?php 
					if(!isset($fila)){
					$codInstrumento = $_GET['valor'];//Viene de la pag de administracion (admi2). OBTIENE EL TIPO DE INSTRUMENTO
					$consulta = "SELECT * FROM productos WHERE codigo='$codInstrumento'";
					$sql = mysql_query($consulta)or die('Tengo un error:'.mysql_error());
					$fila =  mysql_fetch_array($sql);
					$_SESSION['registro'] = $fila;
					
					}?>
						<form id =contacto action="" method=POST enctype=multipart/form-data>
							<fieldset>																		
									<table>
									<tr><td>Nombre: </td><td><input type="text" name="nombre" value="<?php echo  $fila[nombre];?>"><?php echo $msjNombre ?></td></tr>
									<tr><td>Modelo: </td><td><input type="text" name="modelo" value="<?php echo  $fila["modelo"];?>"><?php echo $msjmodelo ?></td></tr>
									<tr><td>Tipo:   </td><td><input type="text" name="tipo"   value="<?php echo  $fila["tipo"];?>"><?php echo $msjTipo ?></td></tr>
									<tr><td>Stock:</td><td> <input  type="text" name="Stock"  value="<?php echo  $fila["Stock"];?>"><?php echo $msjStock ?></td></tr>
									<tr><td>Precio: </td><td><input type="text" name="precio" value="<?php echo  $fila["precio"];?>"><?php echo $msjPrecio ?></td></tr>
									<tr><td>Descripción: </td><td>   <input type="text" name= "descripcion" value="<?php echo  $fila["descripcion"];?>"></td></tr>									
									<tr><td>Estado:</td><td> <input type="text" name="estado" value="<?php echo  $fila["estado"];?>"><?php echo $msjestado ?></td></tr>
									<tr><td colspan=2><input id=btn2 name="guardar_modif" required=required type=submit value=Guardar>
									<a id=btn2a href=Administracion.php?>Cancelar</a>
									</td></tr>
								</table><br>
							</fieldset>
						</form> 
			
				 </div>     
           
              
            </div> <!-- Fin bloque CONTENIDO -->      
           
           
                 
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
            </div><!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
                  		
      
</body>
</html>