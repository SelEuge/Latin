<?php
$dbhost="localhost";//nombre del servidor
$dbuser="root";//nombre de usuario
$dbpass="";//contraseña

$conex_host=mysql_connect($dbhost,$dbuser,$dbpass);//conecta al servidor

if(!$conex_host){
	die("Error no se pudo establecer conexion con el Servidor");
}

$conex_db=mysql_select_db("latinpercussion");//conecto con la BD

if(!conex_db){
	die("Error no se pudo establecer conexion con la Base de Datos");
}
?>