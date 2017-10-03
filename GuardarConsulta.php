<?php
include_once 'Conexion.php';
session_start();
//RECIBO LOS CAMPOS DEL FORMULARIO
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$contenido=$_POST['contenido'];
$msj="";
if(empty($nombre)  || empty($apellido) || empty($telefono)|| empty($contenido)|| empty($email)) {
$msj = $msj."<h2>Retorne y Verifique - Rellene todos los campos</h2>\n";echo "$msj";
}
else{
$Sql="INSERT INTO consultas(codigo, nombre, apellido, email, telefono, contenido)
                  VALUES(NULL,'$nombre','$apellido', '$email', '$telefono' '$contenido')";
$resultado=mysql_query($Sql);

if(!$resultado){
    $msj = "<h2>Su Consulta se ha Enviado!<h2>";
    echo  "$msj";
	}else{
        echo"Error al tratar de guardar";
}
?>
