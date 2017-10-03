<?php 
session_start();
if (($_SESSION['auth'] == false) OR !($_SESSION['rol'] == 'Administrador')){
	header('Location: index.php');
}
$url = $_SESSION['url_pag'];
//incluimos la conexion
include 'Conexion.php';
   //creamos una variable ruta y archivos
   $rutaDestino= "animacion";//nombre de la carpeta destino de imagenes
   $rutaDestino2= "animacion";//nombre de la carpeta destino de imagenes
   $archivotemporal1=$_FILES['ruta']['tmp_name'];
   $archivotemporal2=$_FILES['ruta_grande']['tmp_name'];
   $nombreArchivo1=$_FILES['ruta']['name'];
   $nombreArchivo2=$_FILES['ruta_grande']['name'];
	move_uploaded_file($archivotemporal1,$rutaDestino."/".$nombreArchivo1);
	move_uploaded_file($archivotemporal2,$rutaDestino2."/".$nombreArchivo2);
	
	//guardaremos en ruta esa ruta de ese archivo.
	$rutaDestino=$rutaDestino."/".$nombreArchivo1;
	$rutaDestino2=$rutaDestino2."/".$nombreArchivo2;
	$nombre=$_POST['nombre'];
	$modelo=$_POST['modelo'];
	$tipo=$_POST['tipo'];
	$precio=$_POST['precio'];
	$descripcion=$_POST['descripcion'];
	$stock=$_POST['Stock'];
	
	//Insertamos
	$insertar=mysql_query("INSERT INTO productos VALUES(NULL,'".$nombre."','".$modelo."','".$tipo."','".$precio."','".$rutaDestino."','".$descripcion."','".$rutaDestino2."','".$stock."','alta') ");

	if($insertar)
	{
		echo ('<script>
                  alert(\'Registro Grabado con Éxito\');
                  location.href="Administracion.php"
            
                 </script>');
	}
			else 
			{
				echo "Falló la Inserción";
			}	
?>