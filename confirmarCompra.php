<?php 
error_reporting(0);
session_start();
$url = $_SERVER['REQUEST_URI'];
$_SESSION['url_pag'] = $url;
include 'Conexion.php';
if ($_SESSION['estado'] == false or !isset($_SESSION['carrito'])){
	header('Location: Carrito.php');
}
		if (isset($_POST['env_orden'])) {
			date_default_timezone_set("America/Argentina/Buenos_Aires");
			$usuario = $_SESSION['usuario'];

			$nombre= $_SESSION['nombre'];
			$apellido = $_SESSION['apellido'];
			$mail = $usuario['email'];
			$telefono = $usuario['telefono'];
			//$direccion = $usuario['direccion'];
			//$tarjeta = $_POST['tarjeta'];
			//$nro_tarjeta = $_POST['nro_tarjeta'];
			$carrito= $_SESSION['carrito'];
			//$nro_tarjeta = $_POST['nro_tarjeta'];
			$fecha = date('Y/m/d');
			//$efectivo = $_POST['inp_efectivo'];
			//$local = $_POST['inp_local'];
			//$domicilio = $_POST['inp_domicilio'];
			$error = false;

			

			



			if ($error == false) {
				$sql = 'SELECT * FROM ventas ORDER BY nro_venta Desc LIMIT 1';
				$ultimo = mysql_query($sql)or die('Error: '.mysql_error());
				while ($fila = mysql_fetch_array($ultimo)) {
					$nro_venta = $fila['nro_venta'];
				}

				if ($nro_venta == 0) {
					$nro_venta = 1;
				}else{
					$nro_venta++;
				}

				for($i=0;$i<count($carrito);$i++){
					mysql_query("INSERT INTO ventas (nro_venta, usuario, producto, fecha, cantidad, precio, subtotal) 
					VALUES('".$nro_venta."', '".$usuario['dni']."','".$carrito[$i]['Codigo']."', '$fecha', '".$carrito[$i]['Cantidad']."','".$carrito[$i]['Precio']."','".$carrito[$i]['Cantidad']*$carrito[$i]['Precio']."'
					)")or die('Error: '.mysql_error());

					$stock_nuevo = $carrito[$i]['stock'] - $carrito[$i]['Cantidad'];
					mysql_query("UPDATE productos SET Stock='".$stock_nuevo."' 
								WHERE codigo= '".$carrito[$i]['Codigo']."'") or die('Error: '.mysql_error());
				}
				echo "<script> alert('Se ha registrado su compra exitosamente') </script>";
				$_SESSION['enviado']=true;
				unset($_SESSION['carrito']);
				unset($_SESSION['usuario']);
				header('Location: Carrito.php');
			}
			
		}else{
			$carrito = $_SESSION['carrito'];
			for($i=0;$i<count($carrito);$i++){
				if ($carrito[$i]['Cantidad'] > $carrito[$i]['stock']) {
					$_SESSION['stock_error'] = "Algunos articulo solicitados superan el stock disponible.";
					header('Location: Carrito.php');
				}
			}
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
     	    
     	    <CENTER>
					
					<h1>Gracias por su compra</h1><br>
					
					<?php 
						if(isset($_SESSION['carrito'])){ /*Verificamos si existe el carrito, es decir, si ya tiene algun producto cargado*/
								$array_datos = $_SESSION['carrito'];
								$total = 0;
			
								$consulta = "SELECT * FROM usuarios	WHERE dni='".$_SESSION['dni']."'";
								$sql = mysql_query($consulta);
								$usuario = mysql_fetch_array($sql);
								$_SESSION['usuario'] = $usuario;
								
					?>
					
					<legend>Datos del Comprador</legend>
						<form action="" method="POST">
							<table >
								<tr><td>Nombre:</td><td> <?php echo $usuario['nombre'];?></td></tr>
								<tr><td>Apellido:</td><td><?php echo $usuario['apellido']; ?></td></tr>
								<tr><td>E-mail:</td><td> <?php echo $usuario['email']; ?></td></tr>
								<tr><td>Telefono:</td><td><?php echo $usuario['telefono']; ?></td></tr>
								<tr><td>Importe Total de la compra: $</td><td><?php echo $_SESSION['totalImporte']; ?></td></tr>

							<!-- <tr><td>Direccion:</td><td> <?php echo $usuario['direccion']; ?></td></tr>-->
							</table>
						
						
						
					<h1>Lo esperamos en nuestro local. Solo pagos en efectivo</h1>
					
						<br><br><a href="Carrito.php"> Volver al Carrito</a><br><br><input type="submit" value="Enviar orden" name="env_orden">
					</form>
					
			<?php



				}
				?>
			</CENTER>
												


						
     	    
     	     </div> <!-- Fin bloque CONTENIDO -->
 		
 		
 		<div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>
