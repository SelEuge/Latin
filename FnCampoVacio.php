<?php
//Verifica que cada campo del array no est� vac�o
//$campo es un par�metro que recibe la funci�n: el cual se puede referir al campo $nombre,$apellido,etc.
function estaVacio($campo){
	if(empty ($campo)){
		return 'true';		
	}else{
		return $campo;			
	}	
}
?>