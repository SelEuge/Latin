<?php
function Registrarse(){
echo "<div id=btn>";
	if (isset($_POST ['botonIniciar'])){//Presionó iniciar sesión, asi que despliega:
		echo"<form action= 'Validar.php' method=POST>";//Declara a que pág enviar los datos ingresado
		echo"<input type=text size=20 name=dni placeholder=Usuario>";//El campo para ingresar identificación	
		echo"<input type=password size=20 name=clave placeholder=Contraseña>";//El campo para ingresar contraseña
		echo"<input type=submit name=botonIniciar value='Iniciar Sesion'>";//Al presionar el botón Iniciar envía los datos
		echo"</form>"; 
		
		
	}else{
    		echo"<form action='' method= POST>";//Como no presionó el botón "Iniciar Sesión"
    		//echo "<ul>";
    		echo "<a href=Registrarse.php>Registrarse</a>";
			echo"<input type=submit name=botonIniciar value='Iniciar Sesion'>";
			//echo "</ul>";
			echo "</form>";
		 }		
		 if($_SESSION['valido']==false){//Se hace la comprobación si los campos fueron cargados incorrectamente
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
		echo "<a  href=Administracion.php>Administración</a>";//LLAMA A LA PAG DE MENU DEL ADMINISTRADOR
		//echo $_SESSION["nombre"].' '.$_SESSION["apellido"].' '."<br>".''.$_SESSION["rol"];
		}else{
			echo $_SESSION["nombre"].' '.$_SESSION["apellido"].'  '."<span>- Cliente</span><br><br>";
			echo "<a href='carrito.php'>CARRITO</a>";
			
		}
		echo "<a href='CerrarSesion.php' title='Cerrar sesión'>Cerrar sesión</a>";
		echo "</div>";
		
		
		}	
?>
