<?php 
session_start();
if (($_SESSION['auth'] == false) OR !($_SESSION['rol'] == 'Administrador')){
	//header('Location: index.php');
}
$url = $_SESSION['url_pag'];
$codInstrumento = $_GET['valor'];
$tipo = $_GET['valor'];

include 'Conexion.php';

	$sql = "UPDATE productos SET estado = 'baja' WHERE codigo ='$codInstrumento'";
	$res=mysql_query($sql);
	//header("Location: BajaInstrumento.php?valor=".$tipo);
	if(!$res){
	echo"<script>alert('No se pudo Eliminar los datos!');</script>";
	}else{
	echo"<script>alert('El producto fue eliminado con EXITO!');
			window.location='BajaInstrumento.php?valor=$tipo';
		</script>";
		}
		//header("Location: BajaInstrumento.php?valor=".$tipo);
		
?>