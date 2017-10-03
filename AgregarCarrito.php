<?php
 session_start();
 include_once 'Conexion.php';

 $resultado=array();
 $id2=$_POST['id'];
 $cantidad	= 1;// cantidad de productos a agregar 

 $sql=mysql_query("Select * from productos where codigo= $id2");
 $res=mysql_fetch_array($sql);
 $cant=$res['stock'] - $cantidad;

 $consulta="UPDATE productos SET stock= $cant WHERE codigo= $id2";
 
 if (!$resultado=mysql_query($consulta)) {
 	die(mysql_error($conectdb)."Error al tratar de Guardar");
 	
 }

		 /*
		 * verificar si el producto seleccionado ya esta en el carrito 
		 * si esta, agregar uno a la cantidad de producto en el carrito
		 */
		if (isset($_SESSION['resultado'][$id2])) {
			
			$cantidad += $_SESSION['resultado'][$id2]['cantidad'];
			$_SESSION['resultado'][$id2]['cantidad'] = $cantidad;
			
		} 
		/*
		 * si el producto no esta en el carrito agregarlo
		 * al carrito
		 */
		else {

 $resultado= array(
 			'codigo' => $res['codigo'],
 			'nombre' => $res['nombre'],
 			'modelo' => $res['modelo'],
 			'precio' => $res['precio'],
 			'descripcion' => $res['descripcion'],
 			'cantidad' => $cantidad);

            $_SESSION['resultado'][$id2] = $resultado;
            }

         



header('Location: carrito.php');
?>
