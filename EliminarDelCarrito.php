<?php
session_start();
if (($_SESSION['estado'] == false) OR !($_SESSION['rol'] == 'Administrador')){
	header('Location: index.php');
}
if(isset($_GET['codigo'])){
	$codigo =  $_GET['codigo']; /* Capturamos el codigo del articulo que deseamos elimina y qu nos mandan por URL*/
	$array_carrito = $_SESSION['carrito'];

		/* Recorremos el carrito para ver si el producto ya existe */
		for($i=0;$i<count($array_carrito);$i++){
			//RECORRE EL CARRITO MIENTRAS SEA DISTINTO EL CODIGO QUE VIENE DEL CODIGO QUE ENCUENTRA EN EL CARRITO
			// HACE UN NUEVO ARRAY CON LOS DEMAS PRODUCTOS
			if($array_carrito[$i]['Codigo'] != $codigo){ 
				$array_nuevo[] = array(
										'Codigo' => $array_carrito[$i]['Codigo'],
										'Nombre' =>  $array_carrito[$i]['Nombre'],
										'Modelo' =>  $array_carrito[$i]['Modelo'],
										'Tipo'   =>  $array_carrito[$i]['Tipo'],
										'Descripcion'=>  $array_carrito[$i]['Descripcion'],
										'Precio' =>  $array_carrito[$i]['Precio'],
										'Imagen' => $array_carrito[$i]['Imagen'],
										'stock'  =>  $array_carrito[$i]['stock'],
										'Cantidad' => $array_carrito[$i]['Cantidad']
										);
				//SI ENCONTRO COINCIDENCIA DE CODIGO EN EL ARRAY PREGUNTA 
			   //SI ES MAYOR A UNO PRA DESCONTARLO DE LA CANTIDAD
			}else{
				if ($array_carrito[$i]['Cantidad'] > 1) {
						$array_nuevo[] = array(
										'Codigo' => $array_carrito[$i]['Codigo'],
										'Nombre' =>  $array_carrito[$i]['Nombre'],
										'Modelo' =>  $array_carrito[$i]['Modelo'],
										'Tipo'   =>  $array_carrito[$i]['Tipo'],
										'Descripcion'=>  $array_carrito[$i]['Descripcion'],
										'Precio' =>  $array_carrito[$i]['Precio'],
										'Imagen' => $array_carrito[$i]['Imagen'],
										'stock'  =>  $array_carrito[$i]['stock'],
										'Cantidad' =>  ($array_carrito[$i]['Cantidad'] - 1)										
										);
				}//FIN-IF SI LA CANTIDAD DEL PRODUCTO A BORRAR ES UNO, NO LO GUARDA EN EL ARRAY 
			}
		}
		if(isset($array_nuevo)){
			$_SESSION['carrito'] = $array_nuevo;
			header('Location: Carrito.php');
		}else{
			//HACE ESTO CUANDO HABIA UN SOLO PRODUCTO EN EL CARRITO Y LA CANTIDAD ES IGUAL A 1
			//ENTONCES LO QUE HACE ES DESTRUIR EL CARRITO
			unset($_SESSION['carrito']);
			header('Location: Carrito.php');
		}
}

?>
