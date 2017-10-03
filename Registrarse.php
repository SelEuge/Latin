<?php 
//error_reporting(0);
session_start();
$url = $_SERVER['REQUEST_URI'];
$_SESSION['url_pag'] = $url;

if ($_SESSION['estado'] == True){
	echo"<script>
					alert('Ya tienes una sesión iniciada...NO debes registrarte nuevamente!');
					window.location='index.php';
			</script>";
}

$msjDni = '';$msjNombre = '';$msjApellido ='';$msjTelefono = '';
$msjEmail = '';$msjClave = '';$msjClave2 = '';
//------------------------------------------------------------------------//
function esString ($valor){
	$resp = true;
	for($i=0;$i<strlen($valor);$i++){
		if(is_numeric(substr($valor, $i,1))){
			$resp = false;
		}
	}
	return $resp;
}
//------------------------------------------------------------------------//

function comprobar_email($email){
	$mail_correcto = false;
	//compruebo unas cosas primeras
	if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){
		if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) {
			//miro si tiene caracter .
			if (substr_count($email,".")>= 1){
				//obtengo la terminacion del dominio
				$term_dom = substr(strrchr ($email, '.'),1);
				//compruebo que la terminación del dominio sea correcta
				if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
					//compruebo que lo de antes del dominio sea correcto
					$antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
					$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
					if ($caracter_ult != "@" && $caracter_ult != "."){
						$mail_correcto = true;
					}
				}
			}
		}
	}

	return $mail_correcto;
}
//-------------------------------------------------------------------------------------//

if(isset($_POST['botonReg'])){
	$dni = trim($_POST['dni']);
	$nombre = trim($_POST['nombre']);
	$apellido = trim($_POST['apellido']);
	$telefono = trim($_POST['telefono']);
	$email = trim($_POST['email']);
	$clave = trim($_POST['clave']);
	$clave2 = trim($_POST['clave2']);
		
	include ('Conexion.php');
	$error = false;
	
	if(empty($nombre)){
			$msjNombre = "*Debe escribir su nombre";
			$error=true;
		}else if(!esString($nombre)){
				$msjNombre = "*El nombre no puede contener números";
				$error=true;
			}

	if(empty($apellido)){
		$msjApellido = "*Debe escribir su apellido";
		$error=true;
		}else if(!esString($apellido)){
				$msjApellido = "*El apellido no puede contener números";
				$error=true;
			}
			
	if(empty($dni)){
			$msjDni = "*Debe escribir su DNI";
			$error=true;
		}else if(!is_numeric($dni)){
					$msjDni = "*El DNI debe ser numérico";
					$error=true;
				}else if (strlen($dni) < 8) {
					$msjDni = "*Error: El DNI debe tener al menos<br> 8 caracteres";
					$error=true;
				}else{
					$sql = "SELECT * FROM usuarios WHERE dni='".$dni."'";
					$consulta = mysql_query($sql);
					if (mysql_num_rows($consulta) > 0 ) {
						$msjDni = "*El DNI que intenta registrar ya existe en nuestra BD,<br> verificar datos ingresados";
				}
			}
	if(empty($email)){
			$msjEmail = "*Debe escribir su E-mail";
			$error=true;
		}else if(!comprobar_email($email)){
			$msjEmail = "*E-mail incorrecto, verifique el formato";
			$error=true;
		}else{
					$sql = "select * FROM usuarios WHERE email='".$email."'";
					$consulta = mysql_query($sql);
					if (mysql_num_rows($consulta) > 0 ) {
						$msjEmail = "*El e-mail que intenta registrar ya existe en nuestra BD,<br> verificar datos ingresados";
				}
			}
	if (empty($clave)) {
		$msjClave= "*Debe escribir su clave";
		$error=true;
	}

	if (empty($clave2)) {
		$msjClave2 = "*Debe escribir su clave";
		$error=true;
	}

	if(!empty($clave) && !empty($clave2) && ($clave != $clave2)){
		$msjClave = "*Las contraseñas no coinciden, intentelo nuevamente";
		$msjClave2= "*Las contraseñas no coinciden, intentelo nuevamente";
		$error=true;
	}

	if (!isset($_POST['check']) && $error==false ) {
		$msjCheck = "*Presione el checkbox<br> para guardar la registración";
		$error = true;
	}else if(isset($_POST['check'])){
		$checked = 'Checked';
	}

	if (empty($telefono)){
			$error = true;
			$msjTelefono = "*Debe escribir su telefono";
		}else if (!is_numeric($telefono)){
			$error = true;
			$msjTelefono = '*El Telefono debe ser numerico';
		}else if ((strlen($telefono) < 6) OR (strlen($telefono) > 15)) {
			$error = true;
			$msjTelefono = '*El Telefono debe tener como minimo 6 caracteres y como máximo 15';
		}

		//if(empty($direccion)){
		//$msjDir = "Ingrese su direccion";
		//$error=true;
		//}else if(is_numeric($direccion) or strlen($direccion) < 8){
			//	$msjDir = "Sea mas especifico en <br> su direccion por favor";
				//$error=true;
			//}

		if(!$error){
			include ('Conexion.php');
			$sql = "INSERT INTO usuarios (dni,nombre,apellido,telefono,email,clave,rol)
			VALUES ('$dni','$nombre','$apellido','$telefono','$email','$clave','usuario')";
			$sentencia = mysql_query($sql) or die('Error: '.mysql_error());
			header("Location: Registrarse.php?registrado=true");
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="EstiloIntegrador.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Registrarse</title>
</head>
<body>
	  <div id="contenedor"> <!-- Inicio bloque CONTENEDOR -->
	  
	  	   <div id="encabezado"> <!-- Inicio bloque ENCABEZADO -->
	  	     <img alt= "a" src="animacion/LP-Header.jpg">
	  	      <?php include 'FnEncabezado.php';
     	       Registrarse();?>
	         <!--FALTA AGREGAR FnEncabezado   -->
	  	   </div> <!-- Fin bloque ENCABEZADO -->
      
     	 
     	   	<div id="menu"><!-- Inicio bloque MENU -->	   
     	      <?php include 'Fn_deLinks.php';
     	      Navegacion();//LLama a la función que contiene el Menú?> 
     	    </div><!-- Fin MENU -->     
      
           <div id="contenido"> <!-- Inicio bloque CONTENIDO -->  
           		 <div id="form_contacto">
           			<fieldset>
           			<?php if (!isset($_GET['registrado'])) {
           				echo" <legend>Crear Cuenta de Usuario exclusivo LP</legend>";
		 				echo "<form action='' method=POST>";
		
						/*************************************** CAMPO NOMBRE ************************************************/
						if(!empty($msjNombre)){ //Si el campo esta vacio
							echo "<input size=50 type=text name=nombre placeholder='Nombre' value=".$nombre."><br>";
							echo "<span>".$msjNombre."</span><br>";
							//unset($msjNombre);
						}else {
							echo "<input size=50 type=text name=nombre placeholder='Nombre' value=".$nombre."><br>";
						};
						/*************************************** CAMPO APELLIDO ************************************************/
						if(!empty($msjApellido)){
							echo "<input size=50 type=text name=apellido placeholder='Apellido' value=".$apellido.">";
							echo "<br><span>".$msjApellido."</span><br>";
						}else{
							echo "<input size=50 type=text name=apellido placeholder='Apellido' value=".$apellido."><br>";
						};
						/*************************************** CAMPO DNI ************************************************/
						if(!empty($msjDni)){
							echo "<input size=50 type=text name=dni placeholder='DNI' value=".$dni.">";
							echo "<br><span>".$msjDni."</span> <br>";
						}else {
							echo "<input size=50 type=text name=dni placeholder='DNI' value=".$dni."> <br>";
						}
						/*************************************** CAMPO E-MAIL ************************************************/
						if(!empty($msjEmail)){
							echo"<input size=50 type=text name=email placeholder='Correo Electrónico' value=".$email.">";
							echo "<br><span>".$msjEmail."</span> <br>";
						}else{
							echo"<input size=50 type=text name=email placeholder='Correo Electrónico' value=".$email."> <br>";
						}
						
						/*************************************** CAMPO TELEFONO ************************************************/
						if(!empty($msjTelefono)){
							echo"<input size=50 type=text name=telefono placeholder='Telefono' value=".$telefono.">";
							echo "<br><span>".$msjTelefono."</span> <br>";
						}else{
							echo"<input size=50 type=text name=telefono placeholder='Telefono' value=".$telefono."> <br>";
						}
						/*************************************** CAMPO CREAR CLAVE ************************************************/
						if(!empty($msjClave)){
							echo "<input size=50 type=password name=clave placeholder=Contraseña value=".$clave.">";
							echo "<br><span>".$msjClave."</span> <br>";
						}else {
							echo "<input size=50 type=password name=clave placeholder=Contraseña value=".$clave."><br>";
						}
						/*************************************** CAMPO REPETIR CLAVE ************************************************/
						if(!empty($msjClave2)){
							echo "<input size=50 type=password name=clave2 placeholder='Repetir la contraseña' value=".$clave2.">";
							echo "<br><span>".$msjClave2."</span><br>";
						}else{
							echo "<input size=50 type=password name=clave2 placeholder='Repetir la contraseña' value=".$clave2."><br>";
						}
						/*************************************** CAMPO CHECKBOX ************************************************/
						 if(!empty($msjCheck)){
							echo "<input type=checkbox name=check >";
							echo "<span>".$msjCheck."</span> <br>";
						}else{
							echo "<input type=checkbox name=check ".$checked.">";
						}
						echo "<input name=botonReg id=btn2 type=submit value='Registrarme'>";
						echo"</form>";
						echo"</fieldset>";
				} else{
                      echo" <script>
					alert('¡Se ha registrado con Éxito!');
					window.location='Registrarse.php';
					</script>";
						//echo "Se ha registrado con Éxito";
									 	unset($registrado);
									 	
			}?>				
				     
           		
           		</div> <!--Fin de FORMULARIO -->
      
            </div> <!-- Fin bloque CONTENIDO -->
           
                 
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>