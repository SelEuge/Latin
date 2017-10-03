<?php 
	session_start();
	if ($_SESSION['estado'] == false){
		echo"<script>
					alert('Para realizar una compra debes INICIAR SESIÓN!');
					window.location='index.php';
			</script>";		
	}
$url = $_SERVER['REQUEST_URI'];
$_SESSION['url_pag'] = $url;

//---------------------------------------------------------------------------------------------//
/*verifica si eligio "vaciar el carrto" asi lo destruye*/
if (isset($_GET['vaciar'])) {
	unset($_SESSION['carrito']);
	header('Location: Carrito.php');
}

//---------------------------------------------------------------------------------------------//
include 'Conexion.php';
//SI EXISTE LA VARIABLE DE SESIÓN "CARRITO"
if(isset($_SESSION['carrito'])){//Verificamos si existe el carrito
	if(isset($_GET['codigo']) ){//cuando recarga la pag.. para que no Si accedio desde algun producto y 
		                        //trae un id por URL capturamos los datos sin ingresar a la pagina carrito
		 	                    //que ya tiene cargado nuestro carrito
	$arreglo = $_SESSION['carrito'];
	$encontro = false;//ES UNA BANDERA QUE SIRVE PARA DETECTAR SI YA EXISTE EN EL CARRITO UN MISMO PRODUCTO, ENTONCES VA SUMANDO A LA CANTIDAD.
	$numero = 0;//
	/* Recorremos el carrito para ver si el producto ya existe */
	for($i=0;$i<count($arreglo);$i++){
		if($arreglo[$i]['Codigo'] == $_GET['codigo']){ /*Si el producto que queremos agregar ya exite*/
			$encontro = true; //BANDERA:Se encontro el producto
			$numero = $i;//CAPTURA LA POSICION DEL CODIGO DENTRO DEL ARREGLO CARRITO
		}//FIN-IF
		
	}//FIN-FOR
	if($encontro == true){ /*Si se encontro el producto en el carrito, SE PREGUNTA POR LA BANDERA*/
		$arreglo[$numero]['Cantidad'] = $arreglo[$numero]['Cantidad'] + 1; /*Solo aumentamos la cantidad*/
		$_SESSION['carrito'] = $arreglo; /*Actualizamos el carrito, GUARDANDO EN LA VARIABLE SESSION EL ARREGLO*/
		
	}else{//SINO ENCONTRO EL PRODUCTO EN EL ARREGLO, CARGA TODO COMO UN PRODUCTO NUEVO EN EL ARREGLO
			$nombre='';
			$modelo='';
			$tipo=0;
			$precio=0;
			$imagen='';
			$descripcion='';
			$stock=0;
				
			$re=mysql_query("SELECT * FROM productos WHERE codigo=".$_GET['codigo']);
			//$resultado = mysql_query($re)or die('Error: '.mysql_error());
			while($f=mysql_fetch_array($re)) {
				//CAPTURAMOS LOS RESULTADOS QUE NOS ARROJE LA BD
				$imagen=$f['ruta'];
				$nombre=$f['nombre'];
				$modelo=$f['modelo'];
				$tipo=$f['tipo'];
				$precio=$f['precio'];
				$descripcion=$f['descripcion'];
				$stock=$f['Stock'];			
			}//FIN-WHILE
			//Una vez capturado creamos un arreglo PARA GUARDARLO EN UNA VARIABLE DE SESION
			$datosNuevos=array('Codigo'=>$_GET['codigo'],//se crea un nuevo array para guardar un producto diferente al que ya teniamos en el carrito
					'Nombre'=>$nombre,
					'Modelo'=>$modelo,
					'Tipo'=>$tipo,
					'Descripcion'=>$descripcion,
					'Precio'=>$precio,
					'Imagen'=>$imagen,
					'stock'=>$stock,
					'Cantidad'=>1);
			//AHORA NO GUARDAMOS EN LA SESION CARRITO SINO QUE:
			//al array "carrito" le añadimos el array de un nuevo producto.
			//El carrito es un array de array's
			array_push($arreglo,$datosNuevos);
			//el carrito se actualizo con la carga del array de un nuevo producto
			//AHORA SI PODEMOS GUARDARLO EN LA SESSION.
			$_SESSION['carrito']=$arreglo;
		}//FIN-ELSE
		header("Location: Carrito.php");
	
	}//controla el codigo si existe
  }//cierra el primer if
	else{
		if(isset($_GET['codigo'])){
			$nombre='';
			$modelo='';
			$tipo=0;
			$precio=0;
			$imagen='';
			$descripcion='';
			$stock=0;
			
			$re=mysql_query("SELECT * FROM productos WHERE codigo=".$_GET['codigo']);
			//$resultado = mysql_query($re)or die('Error: '.mysql_error());
			while($f=mysql_fetch_array($re)) {
				//CAPTURAMOS LOS RESULTADOS QUE NOS ARROJE LA BD
				$imagen=$f['ruta'];
				$nombre=$f['nombre'];
				$modelo=$f['modelo'];
				$tipo=$f['tipo'];
				$precio=$f['precio'];
				$descripcion=$f['descripcion'];
				$stock=$f['Stock'];
				
			}//FIN-WHILE
			//Una vez capturado creamos un arreglo PARA GUARDARLO EN UNA VARIABLE DE SESION
			$arreglo[]=array('Codigo'=>$_GET['codigo'],
							 'Nombre'=>$nombre,
							 'Modelo'=>$modelo,
							 'Tipo'=>$tipo,
					         'Descripcion'=>$descripcion,
							 'Precio'=>$precio,
							 'Imagen'=>$imagen,
							 'stock'=>$stock,
							 'Cantidad'=>1);
			//GUARDAMOS EN UNA VARIABLE DE SESIÓN EL ARREGLO
			$_SESSION['carrito']=$arreglo;
			header("Location: Carrito.php");
		}//FIN-IF
		
	}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="EstiloIntegrador.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Carrito</title>
</head>
<body>
	  <div id="contenedorCarrito"> <!-- Inicio bloque CONTENEDOR -->
	  
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
     	    
     	    
     	    
     	    <div id="contenidoCarrito"> <!-- Inicio bloque CONTENIDO --> 
     	   		<?php      	   		     	     	   		
     	   		$total=0;
     	   		if(isset($_SESSION['carrito'])){
						$datos=$_SESSION['carrito'];
						$total=0;
						echo"<table>";
						for($i=0;$i<count($datos);$i++){
				?>
							<tr><td rowspan="2"><img src=<?php echo $datos[$i]['Imagen']?>></td>
							<td><p>Nombre: <?php echo $datos[$i]['Nombre']?></p></td>
							<td><p>Modelo: <?php echo $datos[$i]['Modelo']?></p></td>
							<!--<td><p>Tipo:<?php echo $datos[$i]['Tipo']?></p></td>-->
							<!--<span>Descripcion:<?php //echo $datos[$i]['Descripcion']?></span><br>-->
							</tr>
							<tr>
							<td><p>Precio: $ <?php echo $datos[$i]['Precio'];?></p></td>
							<td><p>Cantidad:<input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"></p></td>					
					        <td><p>Subtotal: $ <?php echo $datos[$i]['Precio'] * $datos[$i]['Cantidad'];?></p></td>
							</tr>
							<?php echo"<td><a href=EliminarDelCarrito.php?codigo=".$datos[$i]['Codigo'].">Eliminar del Carrito</a></td></tr>";?>
							<?php 
							$total=($datos[$i]['Precio'] * $datos[$i]['Cantidad'])+$total;
							$_SESSION['totalImporte']=$total;
							$ultimo_articulo = $datos[$i]['Tipo'];
						}//FIN-FOR 
						echo "</table>";
				 	   		
     	   		}else{
						echo"<center><h2>El carrito está vacío</h2></center><br>";     	   
     	   		}
     	   		echo"<center><h2>Total: $ $total</center><br>";
     	   		//echo"<center><a href=BuscarProducto.php?tipo=".$datos[$i]['Tipo'].">Ver Galería de Productos</a>";
     	   		echo"<center><a href=confirmarCompra.php>Confirmar Compra</a><br>";
     	   		echo"<br><center><a href=Carrito.php?vaciar=si'>Vaciar Carrito</a>";
     	   		?>   
     	    
     	   	
										
     	     </div> <!-- Fin bloque CONTENIDO -->
           
                 
           
           
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>
     	        
      
