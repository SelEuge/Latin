<?php
function Registrarse(){
echo "<div id=btn>";
	if (isset($_POST ['botonIniciar'])){//Presion� iniciar sesi�n, asi que despliega:
		echo"<form action= 'Validar.php' method=POST>";//Declara a que p�g enviar los datos ingresado
		echo"<input type=text size=20 name=dni placeholder=Usuario>";//El campo para ingresar identificaci�n	
		echo"<input type=password size=20 name=clave placeholder=Contrase�a>";//El campo para ingresar contrase�a
		echo"<input type=submit name=botonIniciar value='Iniciar Sesion'>";//Al presionar el bot�n Iniciar env�a los datos
		echo"</form>"; 
		
		
	}else{
    		echo"<form action='' method= POST>";//Como no presion� el bot�n "Iniciar Sesi�n"
    		//echo "<ul>";
    		echo "<a href=Registrarse.php>Registrarse</a>";
			echo"<input type=submit name=botonIniciar value='Iniciar Sesion'>";
			//echo "</ul>";
			echo "</form>";
		 }		
		 if($_SESSION['valido']==false){//Se hace la comprobaci�n si los campos fueron cargados incorrectamente
		 	//echo"<span>Datos incorrectos.Vuelva a ingresar sus datos</span>";//Le permite ingresar nuevamente
		 
		 }
		echo "</div>";		
}

//----------------------------------------------------------------//

function Registrado(){
	echo"<div id=btn>";
	if($_SESSION['rol'] == 'Administrador'){
		echo $_SESSION["nombre"].' '.$_SESSION["apellido"].' '."<br>".''.$_SESSION["rol"];
		echo "<br><br><a href='carrito.php'>Carrito</a>";	
		echo "<a  href=Administracion.php>Administraci�n</a>";//LLAMA A LA PAG DE MENU DEL ADMINISTRADOR
		//echo $_SESSION["nombre"].' '.$_SESSION["apellido"].' '."<br>".''.$_SESSION["rol"];
		}else{
			echo $_SESSION["nombre"].' '.$_SESSION["apellido"].'  '."<span>- Cliente</span><br><br>";
			echo "<a href='carrito.php'>CARRITO</a>";
			
		}
		echo "<a href='CerrarSesion.php' title='Cerrar sesi�n'>Cerrar sesi�n</a>";
		echo "</div>";
		
		
		}	
?>
