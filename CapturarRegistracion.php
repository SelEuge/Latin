<?php
	session_start();
	//Capturamos los datos del formulario de la página Registrarse
	//Los guardamos en variables
	$nombre=($_POST['reg_nombre']);
	$apellido=($_POST['reg_apellido']);
	$dni=($_POST['reg_DNI']);
	$email=($_POST['reg_Email']);
	$telefono=($_POST['reg_telef']);
	$clave=($_POST['reg_clave']);
	$repclave=($_POST['reg_clave2']);
	
	include 'FnCampoVacio.php';
	//Guardamos el registro de una persona con cada dato ingresado en un array, así aplicamos la función que detecta si está vacío
	//Es un array asociativo asi que le pasamos el nombre del campo y nos devuelve el valor que contiene
	$verificar_campos = array(
			'reg_nombre' => estaVacio($nombre),//Fijense que aquí usamos "," y  no ";"
			'reg_apellido'=> estaVacio($apellido),
			'reg_DNI'=> estaVacio($dni),
			'reg_Email'=> estaVacio($email),
			'reg_telef'=> estaVacio($telefono),
			'reg_clave'=> estaVacio($clave),
			'reg_clave2'=> estaVacio($repclave),
	);
	
	//Recorremos el array llamado "$verficar_campos" para ver si algún campo está vacío
	$vacio='false';//Creamos la variable
	foreach ($verificar_campos as $campos => $contenido){
		if($contenido=='true'){
			$vacio='true';
	    }//fin-if
	}//fin-foreach
	
	if($vacio=='true'){
		$_SESSION['verificar_campos']=$verificar_campos;//Guarda en sesion el array para que no se pierdan los datos
		header('Location:Registrarse.php');//Así cuando vuelve a la página Registrarse siguen los datos que se ingresaron 
										  // y  solo se deben ingresar aquellos que faltan	
	}else{
		include 'Conexion.php';//Como todos los campos fueron completados, se procede a guardarlos en la BD
		
		$sql = "INSERT INTO usuarios (dni,nombre,apellido,telefono,email,clave,rol) VALUES ('$dni','$nombre','$apellido','$telefono','$email','$clave','cliente')";
		$sentencia = mysql_query($sql);
		if(!$sentencia){
			echo "<p>msj:usuario ya existe</p>";
			//header('Location: index.php');
		}else{
			header('Location: Registrarse.php');
			include 'Desconexion.php';
			session_destroy();
		      }     
		}// Fin-if
?>