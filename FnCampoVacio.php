<?php
//Verifica que cada campo del array no esté vacío
//$campo es un parámetro que recibe la función: el cual se puede referir al campo $nombre,$apellido,etc.
function estaVacio($campo){
	if(empty ($campo)){
		return 'true';		
	}else{
		return $campo;			
	}	
}
?>