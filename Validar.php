<?php
session_start();
$url = $_SESSION['url_pag'];
$usuario = trim($_POST['dni']);
$contrasenia = trim($_POST['clave']);
if((empty($usuario)) or (empty($contrasenia))){
	$_SESSION['valido'] = false;
	header("Location: $url");
}else{
	include 'Conexion.php';

	$consulta="SELECT * FROM usuarios WHERE dni='$usuario' AND clave='$contrasenia'";
	$resultado= mysql_query($consulta); //Devuelve el registro si encontro sino devuelve falso
	$cant_filas = mysql_num_rows($resultado);//Devuelve la cantidad de registros encontradas

	if($cant_filas==1){
		$fila=mysql_fetch_array($resultado);//Lo que encontró lo convierte en un array
		$_SESSION['estado']=true;//Guarda en el stado de la sesion TRUE para verificar luego el estado de la sesion
		$nombre=$fila['nombre'];//Le asigna lo que contiene el array en el campo nombre.
		$apellido=$fila['apellido'];
		$rol=$fila['rol'];
		$dni=$fila['dni'];
		
		//$_SESSION['estado'] = true;
		$_SESSION['nombre']=$nombre;
		$_SESSION['apellido']=$apellido;
		$_SESSION['rol']=$rol;
		$_SESSION['dni']=$dni;
		header("Location: $url");
	}else{
		echo "Contraseña o usuario incorrectos";
	//header('Location: Terminos.php');
	}
}
?>